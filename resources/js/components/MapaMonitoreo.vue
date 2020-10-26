<template>
    <div class="container mt-12">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row" data-tour-step="1">
                        <vl-map  @click="onClick" :load-tiles-while-animating="true" data-projection="EPSG:4326" style="height: 400px">
                          <vl-view :zoom.sync="zoom" :center.sync="center" :rotation.sync="rotation"></vl-view>
                            <vl-feature v-for="(ubicacion, index) in arrUbicacion" :key="index" :name="index">
                                <vl-geom-point :coordinates="ubicacion"></vl-geom-point>
                                <vl-style-box>
                                  <vl-style-circle>
                                    /* <vl-style-fill color="white"></vl-style-fill> */
                                    <vl-style-stroke color="#C004D9"></vl-style-stroke>
                                  </vl-style-circle>
                                </vl-style-box>
                            </vl-feature>
                            <vl-interaction-select :features="arrUbicacion"></vl-interaction-select>
                            <vl-layer-tile id="osm">
                                <vl-source-osm></vl-source-osm>
                            </vl-layer-tile>
                          </vl-map>
                    </div>
                    <div v-if="mostrarDatos">
                        <ul class="nav nav-tabs" id="pestanasInfo" role="tablist">
                            <li class="nav-item">
                                <a class="btn btn-sm btn-success btn-outline active" id="temperatura-tab" data-toggle="tab" href="#temperatura" role="tab" aria-controls="temperatura" aria-selected="true">Temperatura</a>
                            </li>
                            <li v-if="arrPH.length > 0" class="nav-item">
                                <a class="btn btn-sm btn-success btn-outline" id="ph-tab" data-toggle="tab" href="#ph" role="tab" aria-controls="ph" aria-selected="false">Ph</a>
                            </li>
                            <li v-if="arrOD.length > 0" class="nav-item">
                                <a class="btn btn-sm btn-success btn-outline" id="od-tab" data-toggle="tab" href="#od" role="tab" aria-controls="od" aria-selected="false">Oxígeno Disuelto</a>
                            </li>
                            <li v-if="arrHG.length > 0" class="nav-item">
                                <a class="btn btn-sm btn-success btn-outline" id="hg-tab" data-toggle="tab" href="#hg" role="tab" aria-controls="hg" aria-selected="false">hg</a>
                            </li>
                            <li v-if="arrConduct.length > 0" class="nav-item">
                                <a class="btn btn-sm btn-success btn-outline" id="Conduct-tab" data-toggle="tab" href="#conduct" role="tab" aria-controls="conduct" aria-selected="false">Conductividad</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pestanasContenido">
                            <div class="tab-pane fade show active" id="temperatura" role="tabpanel" aria-labelledby="temperatura-tab">
                                <line-chart height="100px" :chartDatos="arrTemperatura" :chartColors="temperaturaColors" unit="C" label="Temperatura °C" />
                            </div>
                            <div v-if="arrPH.length > 0" class="tab-pane fade" id="ph" role="tabpanel" aria-labelledby="ph-tab">
                                <line-chart height="100px" :chartDatos="arrPH" :chartColors="phColors" unit="pH" label="pH" />
                            </div>
                            <div class="tab-pane fade" id="od" role="tabpanel" aria-labelledby="od-tab" v-if="arrOD.length > 0">
                                <line-chart height="100px" :chartDatos="arrOD" :chartColors="ogColors" unit="mg/L" label="Oxígeno Disuelto mg/L" />
                            </div>
                            <div class="tab-pane fade" id="hg" role="tabpanel" aria-labelledby="hg-tab" v-if="arrHG.length > 0">
                                <line-chart height="100px" :chartDatos="arrHG" :chartColors="hgColors" unit="ppm" label="Hg ppm" />
                            </div>
                            <div class="tab-pane fade" id="conduct" role="tabpanel" aria-labelledby="Conduct-tab" v-if="arrConduct.length > 0">
                                <line-chart height="100px" :chartDatos="arrConduct" :chartColors="conductColors" unit="µS/cm" label="Conductividad µS/cm" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import moment from 'moment';
    import LineChart from './LineChart.vue';
    import zoom from 'chartjs-plugin-zoom';
    import {toStringXY} from 'ol/coordinate';
    import {createStringXY} from 'ol/coordinate';


    export default {
        components: {
            LineChart
        },
        props: {
            label: {
                type: String
            },
            dlatitud: {
                type: String 
            },
            dlongitud: {
                type: String 
            },
            dzoom: {
                type: String 
            },
            mostrargrafica: {
                type: String 
            }
        },
        data () {
            return {
                mostrarDatos: "Si",
                zoom: 8,
                tamano: 200,
                center: [-73.49792, 5.46671],
                rotation: 0,
                geolocPosition: undefined,
                properties: [],
                arrID: [],
                arrLongitud: [],
                arrLatitud: [],
                arrUbicacion: [],
                arrUbicacion: [],
                arrPH: [],
                arrOD: [],
                arrHG: [],
                arrTemperatura: [],
                arrConduct: [],
                phColors: {
                    borderColor: "#4E5E66",
                    pointBorderColor: "#4E5E66",
                    pointBackgroundColor: "#31E981",
                    backgroundColor: "#31E981"
                },
                ogColors: {
                    borderColor: "#829FD9",
                    pointBorderColor: "#0029FA",
                    pointBackgroundColor: "#230A59",
                    backgroundColor: "#5C73F2"
                },
                hgColors: {
                    borderColor: "#BF0436",
                    pointBorderColor: "#5F0340",
                    pointBackgroundColor: "#8C034E",
                    backgroundColor: "#F20587"
                },
                temperaturaColors: {
                    borderColor: "#C004D9",
                    pointBorderColor: "#5E2C99",
                    pointBackgroundColor: "#492378",
                    backgroundColor: "#8C43E6"
                },
                conductColors: {
                    borderColor: "#D9CB04",
                    pointBorderColor: "#8C7503",
                    pointBackgroundColor: "#402401",
                    backgroundColor: "#D9B504"
                },
                myOptions: {
                    useKeyboardNavigation: true,
                    startTimeout: 3000,
                    labels: {
                        buttonSkip: 'Saltar Tour',
                        buttonPrevious: 'Anterior',
                        buttonNext: 'Siguiente',
                        buttonStop: 'Terminar'
                    }
                },
                steps: [
                    {
                        target: '[data-tour-step="1"]',
                            content: 'Cada punto representa las ubicaciones desde donde hemos recolectado datos, puedes interactuar con ellos. Y en la parte inferior veras la información que se recolectó.',
                        params: {
                            placement: 'top-right' 
                        }      
                    },
                    {
                        target: '[data-tour-step="2"]',
                        content: 'Acá puedes ver las graficas de los datos que se han recolectado en el proyecto',
                        params: {
                            placement: 'right' 
                        }      
                    }
                ]
            };
        },
        mounted: function () {
            // this.$tours.['tourmonitoreo'].start()
        },
        watch: {
            center(){
                this.datos()
            },
            zoom(){
                this.datos()
            },
            arrPH(){

            }
        },
        async created(){
            this.center[0] = parseFloat(this.dlatitud);
            this.center[1] = parseFloat(this.dlongitud);
            this.zoom = parseFloat(this.dzoom);
            if( 1 === this.mostrargrafica){
                this.mostrarDatos = false;              
            }
            this.datos();
        },
        methods:{
            onClick(evt,item){
                evt.map.forEachFeatureAtPixel(
                    evt.pixel,
                    function(layer){
                        let nZoom = evt.map.getView().getZoom()
                        switch(true){
                            case nZoom <=10:
                                nZoom = 15
                            break;
                            case nZoom >20:
                                nZoom++
                            break;
                            default:
                            nZoom = nZoom +2
                            break;
                        }
                        evt.map.getView().animate({zoom: nZoom}, {center: layer.values_.geometry.flatCoordinates})
                    }

                );

            },
            async datos(){
                let temp = await axios.get("https://monitoreociudadanoadm.uniandes.edu.co/api/registro-ubicacion/"+this.center[1]+"/"+this.center[0]+"/"+this.zoom);
                let data = [];
                this.arrID = [];
                this.arrPH = [];
                this.arrOD = [];
                this.arrHG = [];
                this.arrConduct = [];
                this.arrTemperatura = [];
                data = temp.data.registros;
                data.forEach( d => {
                    const fecha = moment(d.created_at);
                    fecha.locale('es');
                    const nombre = fecha.format('L');
                    const {
                        id,
                        longitud,
                        latitud,
                        ph,
                        od,
                        hg,
                        conduct,
                        temperatura
                    } = d;
                    this.arrID.push({nombre, total: id});
                    this.pushUniqueCoordinates( this.arrUbicacion, longitud, latitud);
                    if(this.mostrarDatos){
                      this.arrLongitud.push({nombre, total: longitud});
                      this.arrLatitud.push({nombre, total: latitud});
                      this.arrPH.push({nombre, total: ph});
                      this.arrOD.push({nombre, total: od});
                      this.arrHG.push({nombre, total: hg});
                      this.arrConduct.push({nombre, total: conduct});
                      this.arrTemperatura.push({nombre, total: temperatura});
                    }
                });
                this.arrUbicacion = this.arrUbicacion;
            },
            pushUniqueCoordinates( datos, longitud, latitud){
                let no_existe = true;
                if(datos.length==0 ){
                    this.arrUbicacion.push([ longitud, latitud ]);
                }
                else{
                    for(let i=0 ; i < datos.length && no_existe; i++){
                        if( datos[i][0] == longitud && datos[i][1] == latitud){
                            no_existe = false;
                        }
                    }
                    if(no_existe){
                        this.arrUbicacion.push([ longitud, latitud ]);
                    }
                }
            }
        }
    }
</script>
