<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>สินค้า - ระบบจัดการสินค้าและคลังสินค้าแบบออนไลน์</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="css/fixedHeader.dataTables.min.css" rel="stylesheet">

    <link href="css/select.dataTables.min.css" rel="stylesheet">

    <!-- Bootstrap TouchSpin -->
    <!-- Copyright 2013-2015 István Ujj-Mészáros -->
    <!-- http://www.virtuosoft.eu/code/bootstrap-touchspin/ -->
    <link href="css/jquery.bootstrap-touchspin.css" rel="stylesheet">

    <!-- Font CSS -->
    <!-- https://fonts.google.com/specimen/Itim -->
    <link href="css/itim-font.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">

    <!-- My CSS -->
    <link href="css/nav.css" rel="stylesheet">
    <link href="css/product.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    <div w3-include-html="nav.html"></div>

    <div class="container">
        <div class="row">
            <div class="form">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-left">
                    <h1 class="text-head">สินค้า</h1>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right addProduct">
                    <button type="button" id="btnAddProduct" class="btn pull-right btn-add" data-toggle="modal" data-target="#modalAddProduct"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> เพิ่มสินค้าใหม่</button>
                </div>
                
                
            </div>
        </div>

        <div class="row">
            <div class="form">
                <div class="form-group">
                    <div class="form-search">
                        <span class="glyphicon glyphicon-search search-logo" aria-hidden="true"></span>
                        <input type="text" name="" id="myInput" placeholder="พิมพ์คำค้นหา" class="search-input" onkeypress="" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-2 col-sm-1 col-md-1 labelShow">
                        <center><label>แสดง</label></center>
                    </div>
                    <div class="col-xs-4 col-sm-2 col-md-2 selectShow">
                        <select name='LengthChange' id='LengthChange' class="form-control selectShowText">
                            <option value='1'>1 รายการ</option>
                            <option value='2'>2 รายการ</option>
                            <option value='3'>3 รายการ</option>
                            <option value='-1'>ทั้งหมด</option>
                            <option value='-2'>กำหนดเอง</option>
                        </select>
                    </div>
                    <div id="divmyLengthChange">
                        <div class="col-xs-2 col-sm-1 col-md-1 labelShow center-block">
                            <center><label>ระบุ</label></center>
                        </div>
                        <div class="col-xs-4 col-sm-2 col-md-2 selectShow">
                            <input type="" name="myLengthChange" id="myLengthChange" class="form-control selectShowText" >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form">
                <div class="form-group">
                    <div class="table-responsive">
                        <table id="mytable" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="col-xs-1">
                                        <input type="checkbox" id="select_all" name="select_all" value="1" />
                                    </th>

                                    <th class="col-xs-2 col-md-2"><a href="#">รหัสสินค้า</a></th>
                                    <th class="col-xs-3 col-md-3"><a href="#">ชื่อสินค้า</a></th>
                                    <th class="col-xs-2 col-md-2" style="text-align: right;"><a href="#">ราคาซื้อ</a></th>
                                    <th class="col-xs-2 col-md-2" style="text-align: right;"><a href="#">ราคาขาย</a></th>
                                    <th class="col-xs-2 col-md-2" style="text-align: right;"><a href="#">คงเหลือ</a></th>
                                    <th class="col-xs-2 col-md-1 text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                        </table>
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-6 col-md-6 selectShowCount">
                    <div class="dataInfo" id="infoContrainer"></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="dataPagination pull-right" id="paginationControl"></div>
                </div>

                <button type="button" id="btnClick" class="btn pull-right btn-add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>กด</button>
                <input type="text" name="" id="click1">                
            </div>
        </div>
    </div>

    <!-- Modal AddProduct-->
    <div class="modal fade" id="modalAddProduct" tabindex="-1" role="dialog" aria-labelledby="modalLabelAddProduct" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="modalLabelAddProduct">เพิ่มสินค้าใหม่</h4>
                </div>
    
                <!-- Modal Body -->
                <div class="modal-body">
                    <form class="form-horizontal" role="form" name="formAddProduct">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="inputProduct_Id">รหัสสินค้า</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputProduct_Id" placeholder="รหัสสินค้า" tabindex="1" autofocus/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="inputProduct_Name" >ชื่อสินค้า</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputProduct_Name" placeholder="ชื่อสินค้า" tabindex="2"/>
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="inputProduct_Cost" >ราคาซื้อ</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-lg text-right" id="inputProduct_Cost" placeholder="ราคาซื้อ" tabindex="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46'/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="inputProduct_Price" >ราคาขาย</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-lg text-right" id="inputProduct_Price" placeholder="ราคาขาย" tabindex="5" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46'/>
                            </div>
                        </div>

                    </form>
                </div>
    
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" tabindex="8">ปิดหน้าต่าง</button>
                    <button type="button" class="btn btn-primary" tabindex="7" data-dismiss="modal" data-toggle="modal" data-target="#modalAddAlert">บันทึก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Alert-->
    <div class="modal fade" id="modalAddAlert" data-backdrop-limit="1" tabindex="-1" role="dialog" aria-labelledby="modalLabelAddAlert" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="modalLabelAddAlert">ต้องการบันทึกหรือไม่</h4>
                </div>
    
                <!-- Modal Body -->
                <form class="form-horizontal" role="form" id="formDeleteAlert" method='POST' action="addProduct.php">
                    <div class="modal-body">
                        <div class="txtHeadModal">
                            <label class="control-label">ยืนยันการบันทึกรายการ</label>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">รหัสสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtProduct_Id" class="form-control" readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">ชื่อสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtProduct_Name" class="form-control" readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">ราคาซื้อ</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtProduct_Cost" class="form-control" readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">ราคาขาย</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtProduct_Price" class="form-control" readonly/>
                            </div>
                        </div>
                    
                    </div>
    
                <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" tabindex="" data-toggle="modal" data-target="#modalAddProduct">แก้ไขรายการ</button>
                        <button type="button" id="btnSubmitAddProduct" class="btn btn-primary" tabindex="" onclick="addProduct()">ยืนยัน</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST['btnSubmitDeleteProduct'])) { 
            $name = $_POST['txtDeleteProduct_Id'];
            echo "User Has submitted the form and entered this name : <b> $name </b>";
            echo "<br>You can use the following form again to enter a new name."; 
        }
    ?>

    <!-- Modal EditProduct-->
    <div class="modal fade" id="modalEditProduct" tabindex="-1" role="dialog" aria-labelledby="modalLabelEditProduct" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="modalLabelEditProduct">แก้ไขรายการสินค้า</h4>
                </div>
                
                <!-- Modal Body -->
                <div class="modal-body">
                    <form class="form-horizontal" role="form" name="formEditProduct">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="editProduct_Id">รหัสสินค้า</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="editProduct_Id" placeholder="รหัสสินค้า" tabindex="1" autofocus/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="editProduct_Name" >ชื่อสินค้า</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="editProduct_Name" placeholder="ชื่อสินค้า" tabindex="2"/>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="editProduct_Cost" >ราคาซื้อ</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-lg text-right" id="editProduct_Cost" placeholder="ราคาซื้อ" tabindex="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46'/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="editProduct_Price" >ราคาขาย</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-lg text-right" id="editProduct_Price" placeholder="ราคาขาย" tabindex="5" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46'/>
                            </div>
                        </div>

                    </form>
                </div>
                
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" tabindex="8">ปิดหน้าต่าง</button>
                    <button type="button" class="btn btn-primary" tabindex="7" data-dismiss="modal" data-toggle="modal" data-target="#modalEditAlert">บันทึก</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Alert-->
    <div class="modal fade" id="modalEditAlert" data-backdrop-limit="1" tabindex="-1" role="dialog" aria-labelledby="modalLabelEditAlert" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="modalLabelEditAlert">ต้องการบันทึกหรือไม่</h4>
                </div>
            
                <!-- Modal Body -->
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="txtEditHeadModal">
                            <label class="control-label">ยืนยันการบันทึกรายการ</label>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">รหัสสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtEditProduct_Id" class="form-control" readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">ชื่อสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtEditProduct_Name" class="form-control" readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">ราคาซื้อ</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtEditProduct_Cost" class="form-control" readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">ราคาขาย</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtEditProduct_Price" class="form-control" readonly/>
                            </div>
                        </div>

                    </form>
                </div>
                
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" tabindex="" data-toggle="modal" data-target="#modalEditProduct">แก้ไขรายการ</button>
                    <button type="button" id="btnSubmitEditProduct" class="btn btn-primary" tabindex="">ยืนยัน</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Delete Alert-->
    <div class="modal fade" id="modalDeleteAlert" data-backdrop-limit="1" tabindex="-1" role="dialog" aria-labelledby="modalLabelDeleteAlert" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="modalLabelDeleteAlert">ต้องการลบหรือไม่</h4>
                </div>
                
                <!-- Modal Body -->
                <form class="form-horizontal" role="form" id="formDeleteAlert" method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>">    
                    <div class="modal-body">
                        <div class="txtDeleteHeadModal">
                            <label class="control-label">ยืนยันการลบรายการ</label>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">รหัสสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtDeleteProduct_Id" name="txtDeleteProduct_Id" class="form-control" readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">ชื่อสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtDeleteProduct_Name" class="form-control" readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">ราคาซื้อ</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtDeleteProduct_Cost" class="form-control" readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label">ราคาขาย</label>
                            <div class="col-sm-7">
                                <input type="text" id="txtDeleteProduct_Price" class="form-control" readonly/>
                            </div>
                        </div>
                    </div>
                
                <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="submit" id="btnSubmitDeleteProduct" name="btnSubmitDeleteProduct" class="btn btn-primary" tabindex="">ยืนยัน</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Datatables -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/dataTables.fixedHeader.min.js"></script>

    <script src="js/dataTables.select.min.js"></script>

    <!-- Bootstrap TouchSpin
    Copyright 2013-2015 István Ujj-Mészáros
    http://www.virtuosoft.eu/code/bootstrap-touchspin/ -->
    <script src="js/jquery.bootstrap-touchspin.js"></script>

    <!-- Include HTML W3-->
    <script src="js/w3data.js"></script>
    <script>
      w3IncludeHTML();
    </script>

    <!-- My Script -->
    <script src="js/activeMenu.js"></script>

        <!-- Touch Spin -->
        <!-- myLengthChange -->
        <script type="text/javascript">
            $("input[id='myLengthChange']").TouchSpin({
                min: 1,
                max: 100,
                step: 1,
                forcestepdivisibility: 'none',
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10
            });
        </script>

        <!-- DataTables -->
        <script type="text/javascript" charset="utf-8">
            var table;
            // Array holding selected row IDs
            var rows_selected = [];
            $(document).ready(function() {
                //$.fn.DataTable.ext.pager.numbers_length = 7;
                table = $('#mytable').DataTable({
                    "columns": [
                        {"data": null},
                        {"data": "Product_Id"},
                        {"data": "Product_Name"},
                        {"data": "Product_Cost"},
                        {"data": "Product_Price"},
                        {"data": "Product_Total"},
                        {"data": null,
                        defaultContent: '<div class="dropdown">  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <span class="caret"></span></button>  <ul class="dropdown-menu dropdown-menu-right">  <li onclick="detailProduct()"><a href="#">ดูรายละเอียดเพิ่มเติม</a></li>  <li role="separator" class="divider"></li>  <li><a href="#">นำสินค้าเข้า</a></li>  <li><a href="#">จ่ายสินค้าออก</a></li>  <li role="separator" class="divider"></li>  <li onclick="editProduct()"><a href="#">แก้ไขรายการ</a></li>  <li role="separator" class="divider"></li>  <li onclick="deleteProduct()"><a href="#">ลบรายการ</a></li>  </ul>  </div>'}
                    ],
                    "columnDefs": [
                        {"orderable": false, "targets": 0 },
                        {"className": "text-right", "targets": 3}, //3
                        {"className": "text-right", "targets": 4}, //4
                        {"className": "text-right", "targets": 5}, //5
                        {"className": "text-center", "targets": 6}, //6
                        {"orderable": false, "targets": 6 }, //6
                        {
                            'targets': 0,
                            'searchable': false,
                            'orderable': false,
                            'width': '1%',
                            'className': 'dt-body-center',
                            'render': function (data, type, full, meta){
                                return '<input type="checkbox">';
                            }
                        }
                    ],
                    "order": [[ 1, "asc" ]],
                    "bDeferRender": true,
                    "ajax":{
                        url :"productData.php",
                        type: "POST"  // type of method  ,GET/POST/DELETE
                    },
                    "language": {
                        "sLengthMenu":   "แสดง _MENU_ รายการต่อหน้า",
                        "sZeroRecords":  "ไม่พบข้อมูล",
                        "sInfo":         "แสดง _START_ ถึง _END_ จากทั้งหมด _TOTAL_ รายการ",
                        "sInfoEmpty":    "ไม่มีรายการแสดง",
                        "sInfoFiltered": "(กรองข้อมูล _MAX_ รายการ)",
                        "sInfoPostFix":  "",
                        "sSearch":       "ค้นหา: ",
                        "sUrl":          "",
                        "oPaginate": {
                            "sFirst":    "หน้าแรก",
                            "sPrevious": "ก่อนหน้า",
                            "sNext":     "ถัดไป",
                            "sLast":     "หน้าสุดท้าย"
                        },
                        select: {
                          rows: {
                            _: "เลือก %d รายการ",
                            0: "",
                            1: "เลือก 1 รายการ"
                          }
                        }
                    },
                    "lengthMenu": [[1, 2, 3, -1], [1, 2, 3, "All"]],
                    fixedHeader: {
                        header: true,
                        footer: true,
                        headerOffset: 45
                    },
                    "dom": "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-4'i><'col-sm-8 col-xs-12'p>>",
                    'rowCallback': function(row, data, dataIndex){
                        // Get row ID
                        var rowId = data["Product_Id"];

                        // If row ID is in the list of selected row IDs
                        if($.inArray(rowId, rows_selected) !== -1){
                            $(row).find('input[type="checkbox"]').prop('checked', true);
                            $(row).addClass('selected');
                        }
                    }
                    // select: {
                    //     style: 'multi'
                    // }
                });

                $('#myInput').on( 'keyup', function () {
                    table.search( this.value ).draw();
                } );

                // $('#example tbody').on( 'click', 'button', function () {
                //     var data = table.row( $(this).parents('tr') ).data();
                //     alert( data[0] +"'s salary is: "+ data[ 5 ] );
                // } );

                // $('#mytable tbody').on('click', 'tr', function () {
                //   // var data = console.log( table.row( this ).data() );
                //   // console.log([table.row(this).data()], ["Product_Id"]);
                //   var data = table.row( this ).data();
                //   alert( 'You clicked on '+data["Product_Cost"]+'\'s row' );
                // });

                document.getElementById("divmyLengthChange").style.visibility = "hidden";
                $('#LengthChange').change( function() {
                    if($(this).val() != -2){
                        table.page.len( $(this).val() ).draw();
                        document.getElementById("divmyLengthChange").style.visibility = "hidden";
                    }else{
                        document.getElementById("divmyLengthChange").style.visibility = "visible";
                        document.getElementById("myLengthChange").focus();
                    }
                });

                $('#myLengthChange').change( function() { 
                    table.page.len( $(this).val() ).draw();
                });

                $("#paginationControl").append($(".dataTables_paginate"));
                $("#infoContrainer").append($(".dataTables_info"));

                // Handle click on checkbox
                $('#mytable tbody').on('click', 'input[type="checkbox"]', function(e){
                    var $row = $(this).closest('tr');

                    // Get row data
                    var data = table.row($row).data();

                    // Get row ID
                    var rowId = data["Product_Id"];

                    // Determine whether row ID is in the list of selected row IDs 
                    var index = $.inArray(rowId, rows_selected);

                    // If checkbox is checked and row ID is not in list of selected row IDs
                    if(this.checked && index === -1){
                        rows_selected.push(rowId);

                    // Otherwise, if checkbox is not checked and row ID is in list of selected row IDs
                    }else if (!this.checked && index !== -1){
                        rows_selected.splice(index, 1);
                    }

                    if(this.checked){
                        $row.addClass('selected');
                    }else {
                        $row.removeClass('selected');
                    }

                    // Update state of "Select all" control
                    updateDataTableSelectAllCtrl(table);

                    // Prevent click event from propagating to parent
                    e.stopPropagation();
                });

                // Handle click on table cells with checkboxes
                $('#mytable').on('click', 'tbody td, thead th:first-child', function(e){
                    var $cell=$(e.target).closest('td'), msg;
                    if ($cell.index() != 6) {
                        $(this).parent().find('input[type="checkbox"]').trigger('click');
                    }else {
                        $('#mytable tbody input[type="checkbox"]:checked').trigger('click');
                        $(this).parent().find('input[type="checkbox"]').trigger('click');
                    }
                });

                // Handle click on "Select all" control
                $('thead input[name="select_all"]', table.table().container()).on('click', function(e){
                    if(this.checked){
                        $('#mytable tbody input[type="checkbox"]:not(:checked)').trigger('click');
                    }else {
                        $('#mytable tbody input[type="checkbox"]:checked').trigger('click');
                    }

                    // Prevent click event from propagating to parent
                    e.stopPropagation();
                });

                // Handle table draw event
                table.on('draw', function(){
                    // Update state of "Select all" control
                    updateDataTableSelectAllCtrl(table);
                });
               
                //
                $("#btnClick").click(function(e) {
                    alert(rows_selected);
                });
            

            });

            // DataTables Checkbox
            // REF: https://www.gyrocode.com/articles/jquery-datatables-checkboxes/
                function updateDataTableSelectAllCtrl(table){
                    var $table             = table.table().node();
                    var $chkbox_all        = $('tbody input[type="checkbox"]', $table);
                    var $chkbox_checked    = $('tbody input[type="checkbox"]:checked', $table);
                    var chkbox_select_all  = $('thead input[name="select_all"]', $table).get(0);

                    // If none of the checkboxes are checked
                    if($chkbox_checked.length === 0){
                        chkbox_select_all.checked = false;
                        if('indeterminate' in chkbox_select_all){
                            chkbox_select_all.indeterminate = false;
                        }
                    
                    // If all of the checkboxes are checked
                    }else if ($chkbox_checked.length === $chkbox_all.length){
                        chkbox_select_all.checked = true;
                        if('indeterminate' in chkbox_select_all){
                            chkbox_select_all.indeterminate = false;
                        }

                    // If some of the checkboxes are checked
                    }else {
                        chkbox_select_all.checked = true;
                        if('indeterminate' in chkbox_select_all){
                            chkbox_select_all.indeterminate = true;
                        }
                    }
                } 
            
            function myFunction() {
                table.ajax.reload( null, false );
            }
        </script>

        <!-- Button AddProduct -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#btnAddProduct").click(function() {
                    $(':input').val("");
                    $("#categoryID").val(0);
                    $("#quantifyingNounID").val(0);
                });
            });
        </script>

        <!-- Modal AddProduct -->
        <script type="text/javascript">
            $('#modalAddProduct').on('shown.bs.modal', function() {
                $('#inputProduct_Id').focus();

                $("input[id='inputProduct_Cost']").TouchSpin({
                    min: 0,
                    max: 10000,
                    step: 0.25,
                    forcestepdivisibility: 'none',
                    decimals: 2,
                    boostat: 5,
                    maxboostedstep: 10,
                    postfix: 'บาท'
                });

                $("input[id='inputProduct_Price']").TouchSpin({
                    min: 0,
                    max: 10000,
                    step: 0.25,
                    forcestepdivisibility: 'none',
                    decimals: 2,
                    boostat: 5,
                    maxboostedstep: 10,
                    postfix: 'บาท'
                });
            })
        </script>

        <!-- Modal AddAlert -->
        <script type="text/javascript">
            $('#modalAddAlert').on('shown.bs.modal', function() {
                document.getElementById("txtProduct_Id").value = $('#inputProduct_Id').val();
                document.getElementById("txtProduct_Name").value = $('#inputProduct_Name').val();
                document.getElementById("txtProduct_Cost").value = $('#inputProduct_Cost').val() + " บาท";
                document.getElementById("txtProduct_Price").value = $('#inputProduct_Price').val() + " บาท";
            })
        </script>

        <!-- Button Dropdown Responsive Table-->
        <!-- REF: http://stackoverflow.com/questions/26018756/bootstrap-button-drop-down-inside-responsive-table-not-visible-because-of-scroll -->
        <script type="text/javascript">
            (function () {
                $('.table-responsive').on('shown.bs.dropdown', function (e) {var $table = $(this),
                    $menu = $(e.target).find('.dropdown-menu'),
                    tableOffsetHeight = $table.offset().top + $table.height(),
                    menuOffsetHeight = $menu.offset().top + $menu.outerHeight(true);
          
                    if (menuOffsetHeight > tableOffsetHeight)
                        $table.css("padding-bottom", menuOffsetHeight - tableOffsetHeight);
                });

                $('.table-responsive').on('hide.bs.dropdown', function () {
                    $(this).css("padding-bottom", 0);
                })
            })();
        </script>

        <!-- Click Button Option[Add Edit Delete etc.] -->    
        <script type="text/javascript">
            var pId, pName, pCost, pPrice, pTotal;
            $(document).ready(function() {
                $('#mytable tbody').on( 'click', 'button', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    //alert( data["Product_Name"] +"'s salary is: "+ data[ 5 ] );
                    pId = data["Product_Id"];
                    pName = data["Product_Name"];
                    pCost = data["Product_Cost"];
                    pPrice = data["Product_Price"];
                    pTotal = data["Product_Total"];
                });
            });
        </script>

        <!-- Click li EditProduct -->
        <script type="text/javascript">
            function editProduct() {
                $('#modalEditProduct').modal('show');
                document.getElementById("editProduct_Id").value = pId;
                document.getElementById("editProduct_Name").value = pName;
                document.getElementById("editProduct_Cost").value = pCost;
                document.getElementById("editProduct_Price").value = pPrice;
                $('#editProduct_Id').focus();

                    $("input[id='editProduct_Cost']").TouchSpin({
                        min: 0,
                        max: 10000,
                        step: 0.25,
                        forcestepdivisibility: 'none',
                        decimals: 2,
                        boostat: 5,
                        maxboostedstep: 10,
                        postfix: 'บาท'
                    });

                    $("input[id='editProduct_Price']").TouchSpin({
                        min: 0,
                        max: 10000,
                        step: 0.25,
                        forcestepdivisibility: 'none',
                        decimals: 2,
                        boostat: 5,
                        maxboostedstep: 10,
                        postfix: 'บาท'
                    });

                $('#modalEditAlert').on('shown.bs.modal', function() {
                    document.getElementById("txtEditProduct_Id").value = $('#editProduct_Id').val();
                    document.getElementById("txtEditProduct_Name").value = $('#editProduct_Name').val();
                    document.getElementById("txtEditProduct_Cost").value = $('#editProduct_Cost').val() + " บาท";
                    document.getElementById("txtEditProduct_Price").value = $('#editProduct_Price').val() + " บาท";
                })
            }
        </script>

        <!-- Click li DeleteProduct -->
        <script type="text/javascript">
            function deleteProduct() {
                $('#modalDeleteAlert').modal('show');
                document.getElementById("txtDeleteProduct_Id").value = pId;
                document.getElementById("txtDeleteProduct_Name").value = pName;
                document.getElementById("txtDeleteProduct_Cost").value = pCost + " บาท";
                document.getElementById("txtDeleteProduct_Price").value = pPrice + " บาท";
            }

        </script>

        <!-- ??? -->
        <script type="text/javascript">
            function detailProduct() {
                //window.location.href = "eachProduct.html"
            }
        </script>

        <!-- ??? -->
        <script type="text/javascript">
            function addProduct() {
                //window.location.href = "addProduct.html"
            }
        </script>

</body>
</html>