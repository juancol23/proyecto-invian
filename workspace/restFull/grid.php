<!DOCTYPE html>
<html>
<head>
    <title></title>
  
  <link rel="canonical" href="http://demos.telerik.com/kendo-ui/grid/index" />
    <link href="https://kendo.cdn.telerik.com/2017.2.621/styles/kendo.common-material.min.css" rel="stylesheet" />
    <link href="https://kendo.cdn.telerik.com/2017.2.621/styles/kendo.rtl.min.css" rel="stylesheet" />
    <link href="https://kendo.cdn.telerik.com/2017.2.621/styles/kendo.material.min.css" rel="stylesheet" />
    <link href="https://kendo.cdn.telerik.com/2017.2.621/styles/kendo.material.mobile.min.css" rel="stylesheet" />
      
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2017.2.621/js/kendo.all.min.js"></script>

 
</head>
<body>
        <div id="example"> 
            
                      <!--[if gte IE 9]>-->
                      <div id="grid"></div> 
        </div>





        <script src="https://bs-static.cdn.telerik.com/latest/everlive.all.min.js"></script> 
        <script>
            var everlive = new Everlive({
                apiKey: "nfo39wewhggohba9",
                scheme: "http"
            });

            $(document).ready(function() {
                // initialize Everlive application with application API key
                var dataSource = new kendo.data.DataSource({
                    type: "everlive",
                    transport: {
                        // binding to the Order type in Everlive
                        typeName: "empresas"
                    },
                    schema: {
                        model: {
                            id: "Id",
                            fields: {
                                // default Everlive fields
                                nombre:  { type: "string" },
                                
                            }
                        }
                    },
                    serverPaging: true,
                    pageSize: 20,

                    serverSorting: true,
                    sort: { field: 'OrderDate', dir: 'asc' }
                });

                $("#grid").kendoGrid({
                    dataSource: dataSource,
                    height: 430,
                    sortable: true,
                    pageable: true,
                    columns: [
                        {
                            field: "nombre",
                            width: 100
                        }  
                    ]
                });
            });
        </script>
        <!--<![endif]-->

</body>
</html>