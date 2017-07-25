<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="js/cookie.js"></script>
    <title></title>
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.2.621/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.2.621/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.2.621/styles/kendo.material.mobile.min.css" />
    <link rel="stylesheet"  href="css/custom.css" /> 
    <link rel="stylesheet" href="css/bootstrap.css"> 
 
  <link rel="stylesheet" href="css/personalizar.css">

    <script src="https://kendo.cdn.telerik.com/2017.2.621/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2017.2.621/js/kendo.all.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2017.2.621/js/messages/kendo.messages.es-ES.min.js"></script>
    <script src="http://cdn.kendostatic.com/2013.2.716/js/cultures/kendo.culture.es-ES.min.js"></script>

    <script src="https://bs-static.cdn.telerik.com/latest/everlive.all.min.js"></script>

    <base href="http://demos.telerik.com/kendo-ui/donut-charts/remote-data-binding">
    <base href="http://demos.telerik.com/kendo-ui/grid/local-data-binding">

    <script type="text/javascript">
        kendo.culture("es-ES");
    </script>

    <style>
       
    </style>
</head>

<body id="monitoreo" onload="verificar2()"> 
        
    <div class="row">
            <div class="col-md-2 no-mover" style=" height: 100vh">
                <section class="wrapper text-center drawer">
                    <nav>
                        <ul>
                            <li><a onclick="monitoreo()" class="active">Monitoreo</a>
                            </li>
                            <li><a onclick="tienda()">Tiendas</a>
                            </li>
                            <li><a onclick="empresas()">Empresas</a>
                            </li>
                            <li><a onclick="clientes()">Clientes</a>
                            </li>
                            <li><a onclick="perfil()">Perfil</a>
                            </li>
                            <li><a onclick="cerrarS()">Cerrar sesión</a>
                            </li>
                        </ul>
                    </nav>
                </section> 
            </div>

            <div class="col-md-2"></div>
 
            <div class="col-md-10">  
                <div class="row">

                    <div class="col-md-8">

                            <div class="card card-1"> 
                         
                                <div class="demo-section k-content">
                                    <p class="monitora">Monitoring Configuration</p>
                                    <ul id="fieldlist">
                                    <br>
                                        <div class="row">
                                            
                                      
                                            <div class="col-md-4">
                                                <li>
                                                    <label for="device">Device ID (name):</label>
                                                    <label for="device">153222</label>
                                                    <!-- <input id="device"   /> -->
                                                </li>    

                                            </div>
                                            <div class="col-md-4">
                                                <li>
                                                    <label for="adress">Adress:</label>
                                                    <label for="device">Direccion Cuadra 12</label>
                                                    <!-- <input id="adress"  /> -->
                                                </li>

                                            </div>
                                            <div class="col-md-4">
                                                <li>
                                                    <label for="status">Status:</label>
                                                    <label for="device">Online</label>

                                                    <!-- <input id="status"  /> -->
                                                </li>        

                                            </div> 

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4"> 
                                                <li>
                                                    <label for="status">System Time:</label>
                                                    
                                                    <input type="checkbox" data-bind="checked: isChecked"/>
                                                    <span>24 hours Screen:</span>
                                                    <!-- <label for="status">24 hours Screen:</label> --> 

                                                   
                                                    
                                                    <div class="col-md-12 text-center">
                                                        <br>
                                                        <div>
                                                            <label>Monday - Friday</label> 
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="turn">Turn ON</label>
                                                            <label>06:00</label>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="turn">Turn OFF</label>
                                                            <label>06:00</label> 

                                                        </div>
                                                    </div>
                                                        
                                                    <br>
                                                    
                                                    <span>Set same time for the weekend:</span>
                                                    <!-- <label for="status">24 hours Screen:</label> --> 
                                                    <div class="col-md-12 text-center">
                                                        <br>
                                                        <div>
                                                            <label>Monday - Friday</label> 
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="turn">Turn ON</label>
                                                            <label>06:00</label>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="turn">Turn OFF</label>
                                                            <label>06:00</label> 

                                                        </div>
                                                    </div>

                                                    <!-- <div class="col-md-12">
                                                        <br> 
                                                        <div class="col-md-6">
                                                            <label>06:00</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>06:00</label> 
                                                        </div>
                                                    </div> -->

                                                </li> 
                                            </div>
                                            
                                            <div class="col-md-8 text-center ">

                                                <p>Lasta Screen Shot</p>
                                                <h1> IMAGEN</h1>
                                                <h1> </h1>
                                                <h1> -----</h1>
                                                <h1> </h1>
                                                <!-- <input id="status"  />  -->
                                                <label for="">24/07/2017</label>
                                                <button class="btn-save" type="button">Screen Shot</button>
                                            </div>
                                        </div>
                                        <li class="row">
                                            <div class="col-md-4">
                                            </div>
                                            <div class="col-md-4">
                                               
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn-save turn" type="button">Cancel</button>
                                                <button class="btn-save turn" type="button">Save</button>
                                            </div>
                                        </li>

                                    </ul>
                                        
                                </div>         
                            </div>
                    </div>

                    <div class="col-md-4 m">     
                        <div class="card-1" id="chart"></div> 
                    </div>  

                </div> 
                    <br>
                <div class="row">
                        <div class="col-md-12">
                             <div class="card-1" id="grid"></div>        
                        </div>
                </div>
                    <br>
                <div class="row">
                        <div class="col-md-12">
                            <div  class="card-1" id="configuraciones"></div>
                        </div>
                </div>
            </div>
    </div>
        
    <script>
        $(document).ready(function() { 

            $("#chart").kendoChart({

                dataSource: {
                    data: []
                },
                title: {
                    text: "Gráfico de semaforización"
                },
                seriesDefaults: {
                    labels: {
                        template: "#= kendo.format('{0:P}', percentage)#",
                        position: "outsideEnd",
                        visible: true,
                        background: "transparent"
                    }
                },
                series: [{
                    type: "donut",
                    field: "cantidad"
                }],
                tooltip: {
                    visible: true,
                    template: "#= dataItem.categoria #: #= value #"
                }
            }); 
            var everlive = new Everlive({
                apiKey: "x7ncbk69r5atfhqt",
                scheme: "http"
            });
            $("#configuraciones").kendoGrid({

                dataSource: {
                    autoSync: true,
                    type: "everlive",
                    transport: {
                        typeName: "configuraciones",
                        read: {
                            url: 'https://api.everlive.com/v1/x7ncbk69r5atfhqt/configuraciones?filter={"cliente":"' + JSON.parse(Cookies.get("cliente")).Id + '"}',
                            dataType: "jsonp"
                        }
                    },
                    schema: {
                        model: {
                            fields: {
                                cliente: {
                                    type: "string"
                                },
                                horainicio: {
                                    type: "number"
                                },
                                horafin: {
                                    type: "number"
                                },
                                verde: {
                                    type: "number",
                                    editable: false
                                },
                                amarillo: {
                                    type: "number"
                                },
                                rojo: {
                                    type: "number"
                                },
                            }
                        }
                    },
                    change: function(e) {
                        var view = this.view();
                        Cookies.set('configuraciones', view[0], {
                            expires: 2
                        });
                        var grid = $("#grid").data("kendoGrid");
                        grid.refresh();
                        grid.trigger("change");
                        // var chart = $("#chart").data("kendoChart");
                        // chart.refresh();
                    }
                },
                editable: true,
                scrollable: false,
                columns: [{
                    field: "horainicio"
                }, {
                    field: "horafin"
                }, {
                    field: "verde",
                    template: "menor a #=amarillo# min"
                }, {
                    field: "amarillo",
                    template: "entre #=amarillo# y #=rojo# min"
                }, {
                    field: "rojo",
                    template: "mayor a #=rojo# min"
                }]
            });
            $("#grid").kendoGrid({

                dataSource: {
                    // data: data,
                    transport: {
                        typeName: "configuraciones",
                        read: {
                            url: "https://api.everlive.com/v1/rf9kbctkej2y26r2/Functions/monitoreo", //funcion de produccion
                            dataType: "jsonp"
                        }
                    },
                    schema: {
                        model: {
                            fields: {
                                origen: {
                                    type: "string"
                                },
                                device: {
                                    type: "string"
                                },
                                countregistros: {
                                    type: "number"
                                },
                                ultimoregistro: {
                                    type: "date"
                                }
                            }
                        }
                    },
                    change: function(e) {
                        var items = this.view();
                        var array = [{
                                "categoria": "verde",
                                "cantidad": 0,
                                "color": "green"
                            }, {
                                "categoria": "amarillo",
                                "cantidad": 0,
                                "color": "yellow"
                            }, {
                                "categoria": "rojo",
                                "cantidad": 0,
                                "color": "red"
                            }],
                            now = new Date(),
                            configuraciones = JSON.parse(Cookies.get('configuraciones'));
                        for (var i = 0; i < items.length; i++) {
                            var ms = (now - items[i].ultimoregistro);
                            if (now.getHours() >= configuraciones.horainicio && now.getHours() <= configuraciones.horafin) {
                                switch (true) {
                                    case ms < configuraciones.amarillo * 60000:
                                        array[0].cantidad++;
                                        break;
                                    case ms > configuraciones.amarillo * 60000 && ms < configuraciones.rojo * 60000:
                                        array[1].cantidad++;
                                        break;
                                    default:
                                        array[2].cantidad++;
                                        break;
                                }
                            } else {

                            }
                        }
                        var chart = $("#chart").data("kendoChart");
                        var ds = new kendo.data.DataSource({
                            data: array
                        });
                        chart.setDataSource(ds);
                    },
                    // pageSize: 20
                },
                //height: 550, // groupable: true,
                scrollable: false,
                sortable: true,
                filterable: {
                    mode: "row"
                },
                change: function(e) {
                    var items = this.dataSource.data();
                    var array = [{
                            "categoria": "verde",
                            "cantidad": 0,
                            "color": "green"
                        }, {
                            "categoria": "amarillo",
                            "cantidad": 0,
                            "color": "yellow"
                        }, {
                            "categoria": "rojo",
                            "cantidad": 0,
                            "color": "red"
                        }],
                        now = new Date(),
                        configuraciones = JSON.parse(Cookies.get('configuraciones'));
                    for (var i = 0; i < items.length; i++) {
                        var ms = (now - items[i].ultimoregistro);
                        if (now.getHours() >= configuraciones.horainicio && now.getHours() <= configuraciones.horafin) {
                            switch (true) {
                                case ms < configuraciones.amarillo * 60000:
                                    array[0].cantidad++;
                                    break;
                                case ms > configuraciones.amarillo * 60000 && ms < configuraciones.rojo * 60000:
                                    array[1].cantidad++;
                                    break;
                                default:
                                    array[2].cantidad++;
                                    break;
                            }
                        } else {

                        }
                    }
                    var chart = $("#chart").data("kendoChart");
                    var ds = new kendo.data.DataSource({
                        data: array
                    });
                    chart.setDataSource(ds);
                },
                // pageable: {
                //     input: true,
                //     numeric: false
                // },
                columns: [{
                    field: "origen",
                    title: "Origen",
                    attributes: {
                        style: "text-align: center;"
                    },
                    filterable: {
                        cell: {
                            showOperators: false,
                            operator: "contains"
                        }
                    },
                    // template: "mac: #=device#"
                }, {
                    field: "device",
                    title: "Dispositivo",
                    attributes: {
                        style: "text-align: center;"
                    },
                    filterable: {
                        cell: {
                            showOperators: false,
                            operator: "contains"
                        }
                    },
                    // template: "mac: #=device#"
                }, {
                    field: "countregistros",
                    title: "Cantidad de registros",
                    filterable: false,
                    attributes: {
                        style: "text-align: center;"
                    }
                }, {
                    field: "ultimoregistro",
                    title: "Fecha",
                    format: "{0:dd MMM yyyy}",
                    attributes: {
                        style: "text-align: center;"
                    },
                    filterable: {
                        cell: {
                            operator: "eq",
                            showOperators: false,
                            template: function(args) {
                                args.element.kendoDatePicker({
                                    format: "{0:dd MMM yyyy}",
                                    parseFormats: "{0:dd MMM yyyy}"

                                });
                            }
                        }
                    }
                }, {
                    field: "ultimoregistro",
                    title: "Hora",
                    format: "{0:hh:mm:ss}",
                    filterable: false,
                    attributes: {
                        style: "text-align: center;"
                    }
                }, {
                    field: "ultimoregistro",
                    title: "Semáforo",
                    filterable: false,
                    attributes: {
                        style: "text-align: center;"
                    },
                    template: "#function formatearMiliseg(s) { function addZ(n) { return (n<10? '0':'') + n; } var ms = s % 1000; s = (s - ms) / 1000; var secs = s % 60; s = (s - secs) / 60; var mins = s % 60; var hrs = (s - mins) / 60; return addZ(hrs) + ':' + addZ(mins) + ':' + addZ(secs)}; var now = new Date(),ms = (now-ultimoregistro),configuraciones = JSON.parse(Cookies.get('configuraciones')); if(now.getHours()>= configuraciones.horainicio && now.getHours()<= configuraciones.horafin ){switch (true){case ms<configuraciones.amarillo*60000: #<p class='verde'>#: formatearMiliseg(ms) #</p> #break;case ms>configuraciones.amarillo*60000 && ms<configuraciones.rojo*60000: #<p class='amarillo'>#: formatearMiliseg(ms) #</p>#break; default: #<p class='rojo'>#: formatearMiliseg(ms) #</p>#}}else{#<p>#: formatearMiliseg(ms) #</p>#}#"
                }]
            });
        });
     
            function monitoreo() {
                window.location.replace("http://localhost/workspace/proyecto-invian/adminadbeacons/monitoreo.html");
            }

            function tienda() {
                window.location.replace("http://localhost/workspace/proyecto-invian/adminadbeacons/tienda.html");
            }

            function empresas() {
                window.location.replace("http://localhost/workspace/proyecto-invian/adminadbeacons/empresas.html");
            }

            function clientes() {
                window.location.replace("http://localhost/workspace/proyecto-invian/adminadbeacons/clientes.html");
            }

            function dispositivos() {
                window.location.replace("http://localhost/workspace/proyecto-invian/adminadbeacons/dispositivos.html");
            }

            function cerrarS() {
                window.location.replace("http://localhost/workspace/proyecto-invian/adminadbeacons/login.html");
                Cookies.remove('token');
            }

            function verificar2() {
                if (Cookies.get('token') == null) {
                    window.location.replace("http://localhost/workspace/proyecto-invian/adminadbeacons/login.html");
                }
            }
    </script> 
    
    
</body>

</html>
