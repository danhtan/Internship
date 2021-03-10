<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->

    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <title>Thi trắc nghiệm</title>



    <style>
        *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
/* .nd{
    border-left: 1px solid black;
    position: relative;
    height: 100%;
} */
#monhoc div{
    color:black;
    width: 50%;
}

#monhoc div:hover{
    background: lightblue;
    cursor: pointer;
}

.btnThemMH{
    position: relative;
    margin-top:20px;
    margin-bottom: 10px;
}

#dapAn textarea, #sua_dapAn textarea{
    margin-top:20px;
    width: 98%;
    border-radius: 4px;
    position: relative;
}

 ol li{
    position: relative;
    left: 2%;
    width: 50%;
}

xmp{
    font-family:  "Helvetica Neue",Helvetica,Arial,sans-serif;
    white-space: pre-wrap ;
}

#cauhoi>ol{
    border-bottom: 1px solid black;
    width: 100%;
}

.canle{
    border-right: 1px solid black;
    position: fixed;
    width: 25%;
    height: 100%;
    margin: 0px;
    padding: 0px;
}

.canle b{
    position: relative;
    left: 4%;
    width: 25px;
    color:black; 
}
.col9{
    display: none;
}

.btnDangXuat, .btnTaoTaiKhoan{
    float: right;
    margin: 5px;
}
a:hover{
    cursor: pointer;
}
</style>
</head>

<body>
    <div class="canle">

    <b> DANH SÁCH MÔN THI:</b>
   
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
              <br>
                <div id="monhoc">
                    
                </div>

                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        Quản lý môn thi
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" data-target="#formThemMonHoc"><span class="glyphicon glyphicon-plus"></span> Thêm môn thi</a></li>
                        <li><a data-toggle="modal" data-target="#formSuaMonHoc"><span class="glyphicon glyphicon-edit"></span> Sửa môn thi</a></li>
                        <li><a data-toggle="modal" data-target="#formXoaMonHoc"><span class="glyphicon glyphicon-trash"></span> Xóa môn thi</a></li>
                    </ul>
                </div>
                <div class="modal fade" id="formThemMonHoc" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> <span class="glyphicon glyphicon-plus"></span> Thêm mới môn thi</h4>
                            </div>
                            <div class="modal-body">
                                <span>Tên môn thi:</span> <br>
                                <input type="text" id="subjectName" class="form-control"> <br>
                            </div>
                            <div class="modal-footer">
                                <input type="button" value="Thêm" class="btn btn-success" id="btnThem">
                                <button type="button" class="btn btn-primary" data-dismiss="modal" id="closeThemMH">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="formSuaMonHoc" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Sửa môn thi</h4>
                            </div>
                            <div class="modal-body">
                                <select id="sua_danhsachmon"></select> <br>
                                <span>Tên môn học:</span> <br>
                                <input type="text" id="sua_SubjectName" class="form-control"> <br>
                            </div>
                            <div class="modal-footer">
                                <input type="button" value="Sửa " class="btn btn-success" id="btnSuaMH">
                                <button type="button" class="btn btn-primary" data-dismiss="modal" id="closeSuaMH">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="formXoaMonHoc" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Xóa môn thi</h4>
                            </div>
                            <div class="modal-body">
                                <select id="xoa_danhsachmon"></select> <br>
                            </div>
                            <div class="modal-footer">
                                <input type="button" value="Xóa " class="btn btn-danger" id="btnXoaMH">
                                <button type="button" class="btn btn-primary" data-dismiss="modal" id="closeXoaMH">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <!-- <input type="button" value="Đăng xuất" class="btn btn-primary btnDangXuat"> -->
                <button class="btn btn-primary btnDangXuat"><span class="glyphicon glyphicon-home"></span> Đăng xuất</button>
                <button  class="btn btn-primary btnTaoTaiKhoan" data-toggle="modal" data-target="#modalTaoTK"><span class="glyphicon glyphicon-user"></span> Tạo tài khoản học sinh</button>
                <!-- <input type="button" value="Tạo tài khoản sinh viên" class="btn btn-primary btnTaoTaiKhoan" data-toggle="modal" data-target="#modalTaoTK"> -->
                <div class="modal fade" id="modalTaoTK" role="dialog">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h2 class="modal-title">Tạo tài khoản học sinh</h2><br>
                            </div>
                            <div class="modal-body">
                                <label >Tên đăng nhập:</label>
                                <input type="text" id="tenDangNhap" class="form form-control">
                                <label >Mật khẩu:</label>
                                <input type="password" id="matKhau" class="form form-control">    
                            </div>
                            <div class="modal-footer">
                                <input type="button" value="Tạo" class="btn btn-success" id="btnThemTK">
                                <button type="button" class="btn btn-default" data-dismiss="modal" id="closeThemTK">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col9">
                    <b id="name">Thông tin môn thi</b> <br>
                    <input type="button" value="Thêm câu hỏi" class="btn btn-primary btnThemMon" id="ThemCauHoi"
                        data-toggle="modal" data-target="#modalThemCauHoi">
                    <div class="modal fade" id="modalThemCauHoi" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title"> <span class="glyphicon glyphicon-plus"></span> Thêm mới câu hỏi</h2><br>
                                    <label>Chọn môn học: </label>
                                    <select id="danhsachmon"></select> <br>
                                </div>
                                <div class="modal-body">
                                    <label>Nội dung câu hỏi:</label> <br>
                                    <textarea class="form-control" type="text" id="noiDungCauHoi" autofocus></textarea><br>
                                    <label>Độ khó: </label>
                                    <select id="doKho">
                                        <option value="1">Nhận biết</option>
                                        <option value="2">Thông hiểu</option>
                                        <option value="3">Vận dụng</option>
                                        <option value="4">Vận dụng cao</option>
                                    </select>
                                    <label>Nhóm câu hỏi: </label>
                                    <select id="Nhom1">
                                        
                                    </select>

                                    <label>số lượng đáp án:</label>
                                    <input type="number" value="4" min="2" max="8" id="soLuongDapAn">
                                    <div id="dapAn"></div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" value="Thêm" class="btn btn-success" id="btnThemCauHoi">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="closeThemCauHoi">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalSuaCauHoi" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title"><span class="glyphicon glyphicon-edit"></span> Sửa câu hỏi</h2><br>
                                </div>
                                <div class="modal-body">
                                    <label>Nội dung câu hỏi:</label> <br>
                                    <textarea class="form-control" type="text" id="sua_noiDungCauHoi" autofocus></textarea><br>
                                    <label>Độ khó: </label>
                                    <select id="sua_doKho">
                                        <option value="1">Nhận biết</option>
                                        <option value="2">Thông hiểu</option>
                                        <option value="3">Vận dụng</option>
                                        <option value="4">Vận dụng cao</option>
                                    </select>
                                    <label>Nhóm câu hỏi: </label>
                                    <select id="Nhom2">
                                        
                                    </select>

                                    <div id="sua_dapAn"></div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" value="Sửa câu hỏi" class="btn btn-success" id="btnSuaCauHoi">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="closeSuaCauHoi">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="button" class="btn btn-primary" value="Lịch thi"  id="btnLichThi" data-toggle="modal" data-target="#modalLichThi">
                    <div class="modal fade" id="modalLichThi" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title">Quản lý lịch thi</h2><br>
                                </div>
                                <div class="modal-body">
                                    <label >Giờ bắt đầu:</label>
                                    <input type="datetime-local" id="gioBatDau" class="form form-control">
                                    <label >Giờ kết thúc:</label>
                                    <input type="datetime-local" id="gioKetThuc" class="form form-control"><br>
                                    <label >Lịch thi:</label>
                                    <div id="lichthi"></div>    
                                </div>
                                <div class="modal-footer">
                                    <input type="button" value="Thêm lịch thi" class="btn btn-success" id="btnThemLichThhi">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="closeLichThi">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="button" class="btn btn-primary" value="Cài số lượng câu"  id="btnQLDT" data-toggle="modal" data-target="#modalQLDT">
                    <div class="modal fade" id="modalQLDT" role="dialog">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title">Cài số lượng câu </h2><br>
                                </div>
                                <div class="modal-body">
                                    <label >Số lượng câu hỏi:</label>
                                    <input type="number" min='10' id="soLuongCauHoi" class="form-control" value="10">
                                </div>
                                <div class="modal-footer">
                                    <input type="button" value="OK " class="btn btn-success" id="btnOK">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="closeQLDT">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="button" class="btn btn-primary" value="Quản lí cấu trúc môn thi"  id="btnQLCTMT" data-toggle="modal" data-target="#modalQLCTMT">
                    <div class="modal fade" id="modalQLCTMT" role="dialog">
                        <div class="modal-dialog-scrollable" >
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title">Quản lý cấu trúc môn thi</h2><br>
                                </div>
                                <div class="modal-body" >
                                    <label >Mức độ:</label>
                                    <select id="mucdo" class="form form-control">
                                        <option value="1">Nhận biết</option>
                                        <option value="2">Thông hiểu</option>
                                        <option value="3">Vận dụng</option>
                                        <option value="4">Vận dụng cao</option>
                                    </select>
                                    <label >Nhóm Câu Hỏi:</label>
                                    <input type="text" id="nhomch" class="form form-control"><br>
                                    <label >Số lượng:</label>
                                    <input type="number" min='1' id="soluongcauhoi" class="form form-control" value="1">
                                    <label >Cấu trúc môn thi:</label>
                                    <div id="cautruc">

                                </div>    
                                </div>
                                <div class="modal-footer">
                                    <input type="button" value="Thêm cấu trúc môn thi" class="btn btn-success" id="btnThemCauTruc">
                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="closeQLCTMT">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cauhoi"></div>
                    <div id="phantrang"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
$(document).ready(function () {
    //lay cau hoi
   let tranghientai = 1;

    function getQuestion(id) {
        $.ajax({
            type: "GET",
            url: "{{ route('danhsachcauhoi_admin.check') }}",
            data: { ID: id },
            dataType: "text",
            success: function (response) {
                var data = JSON.parse(response);
                //phan trang
                var s = "<ul class='pagination'>";
                for (var i = 1; i <= Math.ceil(data.length / 10); i++) {
                    s += "<li><a href='#'>" + i + "</a></li>";
                }
                s += "</ul>";
                $("#phantrang").html(s);

                function hiencauhoi(trang) {
                    var s = "";
                    for (var i = 0; i < 10; i++) {
                        var stt = (trang - 1) * 10 + i;
                        if (stt == data.length) {
                            break;
                        }
                        s += "<input type='button' value='Xóa' class='btn btn-danger' data-idch='" + data[stt].ID + "'> ";
                        s += " <input type='button' value='Sửa' class='btn btn-info' data-toggle='modal' data-target='#modalSuaCauHoi' data_idch='" + stt + "'> ";
                        s += "<div>";
                        s += "Câu " + (stt + 1) + ". ";
                        s += data[stt].NoiDung + "</div>";
                        s += "<ol type='A'>"
                        $(data[stt].DapAn).each(function (index, dapan) {
                            s += "<li>";
                            if (dapan.DapAn == 1) {
                                s += "<xmp style='color:red'>";
                            }
                            else {
                                s += "<xmp>";
                            }
                            s += dapan.NoiDung;
                            s += "</xmp>";
                            s += "</li>";
                        });
                        s += "</ol>";
                    }
                    $("#cauhoi").html(s);
                    //Xoa cau hoi
                    $("input[value='Xóa']").each(function (index, element) {
                        $(this).click(function () {
                            let id= $(this).attr('data-idch');
                            alert(id);
                            if (confirm("Bạn có chắc muốn xóa câu hỏi không?")) {
                                $.ajax({
                                    type: "GET",
                                    url: "{{ route('xoacauhoi.check') }}",
                                    data: { ID: id },
                                    dataType: "text",
                                    success: function (response) {
                                        alert(response);
                                        getQuestion(idClick);
                                    }
                                });
                            }
                        });
                    });
                    
                    // Chon cau de sua
                     var ch = { DapAn: [] };  
                    $("input[value='Sửa']").each(function (index, element) {
                        $(this).click(function () {
                            let id= $(this).attr('data_idch');
                            alert(id);
                            var cauhoi = data[id];
                            ch = { DapAn: [] };
                            ch.ID = cauhoi.ID;
                           let content = cauhoi.NoiDung;
                          //  alert(content);
                            $("#sua_noiDungCauHoi").val(content);
                            alert(content);
                            $("#sua_doKho").val(cauhoi.DoKho);
                            $("#Nhom2").val(cauhoi.NhomCH);
                            //nhomcauhoi
                            var s = "<ol type='A'>";
                            $(cauhoi.DapAn).each(function (i, e) {
                                ch.DapAn.push({ ID: e.ID });
                                s += "<li><input type='radio' name='suadapan' ";
                                if (e.DapAn == true) {
                                    s += "checked='checked'";
                                }
                                s += "><textarea>";
                                s += e.NoiDung;
                                s += "</textarea></li>";
                            });
                            s += "</ol>";
                            $("#sua_dapAn").html(s);

                            $("#btnSuaCauHoi").unbind('click');
                            $("#btnSuaCauHoi").click(function () {
                            ch.NoiDung = $("#sua_noiDungCauHoi").val();
                            ch.DoKho = $("#sua_doKho").val();
                            ch.NhomCH = $("#Nhom2").val();
                            $("#sua_dapAn textarea").each(function (i, e) {
                                ch.DapAn[i].NoiDung = $(this).val();

                            });
                            $("#sua_dapAn input[type='radio']").each(function (i, e) {
                                ch.DapAn[i].DapAn = $(this).prop("checked");

                            });
                            $.ajax({
                                type: "GET",
                                url: "{{ route('suacauhoi.check') }}",
                                data: { CH: JSON.stringify(ch) },
                                dataType: "text",
                                success: function (response) {

                                    alert(response);
                                    $("#closeSuaCauHoi").trigger('click');
                                    getQuestion(idClick);
                                }
                            
                            });
                        });

                        });
                    });

                }

                hiencauhoi(tranghientai);

                $("#phantrang a").click(function () {
                    var trang = $(this).html();
                    tranghientai = parseInt(trang);
                    hiencauhoi(tranghientai);           
                });

            },
            error: function () {
                alert("Có lỗi xảy ra");
            }

        });
        
    }


    //lay danh sach mon hoc 
    var idClick = 0;
    function getListSubject() {
        $.ajax({
            type: "GET",
            url: "{{ route('danhsach_admin.check') }}",
            data: "",
            dataType: "text",
            success: function (response) {
                var data = JSON.parse(response);
                var s = "";
                var s2 = "";
                data.forEach(function (e) {
                    s += "<div>";
                    s += e.TenMonHoc;
                    s += "</div>"
                    s2 += "<option value='" + e.ID + "'>";
                    s2 += e.TenMonHoc;
                    s2 += "</option>";
                });
                $("#monhoc").html(s);
                $("#danhsachmon").html(s2);
                $("#sua_danhsachmon").html(s2);
                $("#xoa_danhsachmon").html(s2);
                $("#sua_SubjectName").val($("#sua_danhsachmon option:selected").text());
                //click mon hoc
                $("#monhoc div").each(function (index, element) {
                    $(this).unbind('click');
                    $(this).click(function () {
                        $(".col9").show();  
                        var s = $(this).html();
                        $("#name").html(s);
                        idClick = data[index].ID;
                        $("#danhsachmon").val(idClick);
                        $("#sua_danhsachmon").val(idClick);
                        $("#xoa_danhsachmon").val(idClick);
                        $("#sua_SubjectName").val($("#sua_danhsachmon option:selected").text());
                        $.ajax({
                        type: "GET",
                        url: "{{ route('laynhomcauhoi.check') }}",
                        data: { ID: idClick },
                        dataType: "text",
                        success: function (response) {   
                        var data = JSON.parse(response);
                        var s = "";
                        data.forEach(function (e) {
                            s += "<option value='" + e.Nhom + "'>";
                            s += e.Nhom;
                            s += "</option>";
                        });
                        $("#Nhom1").html(s);
                        $("#Nhom2").html(s);
                        },
                        error: function () {
                            alert("Có lỗi xảy ra, vui lòng thử lại");
                        }
                        });

                        getQuestion(idClick);
                    });

                });
              
            }
        });
    }
    getListSubject();
   // click them mon hoc
    $("#btnThem").click(function () {
        var subjectName = $("#subjectName").val().trim();
        if (subjectName == "" || subjectName == null) {
            alert("chưa nhập tên môn học");
        }
        else {
            $.ajax({
                type: "GET",
                url: "{{ route('themmonhoc.check') }}",
                data: { name: subjectName },
                dataType: "text",
                success: function (response) {
                    alert(response);
                    $("#subjectName").val("");
                    getListSubject();
                    $("#closeThemMH").trigger('click');
                },
                error: function () {
                    alert("có lỗi xảy ra");
                }
            });
        }
    });

   // click sua mon hoc
    $("#btnSuaMH").click(function () {
        if ($("#sua_SubjectName").val().trim() == "" || $("#sua_SubjectName").val() == null) {
            alert("Tên môn học không được để trống");
        }
        else {
            var mh = {};
            mh.ID = $("#sua_danhsachmon").val();
            mh.tenMonHoc = $("#sua_SubjectName").val();
            $.ajax({
                type: "GET",
                url: "{{ route('suamonhoc.check') }}",
                data: mh,
                dataType: "text",
                success: function (response) {
                    alert(response);
                    getListSubject();
                    $("#closeSuaMH").trigger('click');
                },
                error: function () {
                    alert("Có lỗi xảy ra, vui lòng thử lại");
                }
            });
        }
    });

   // click xoa mon hoc
    $("#btnXoaMH").click(function () {
        if (confirm("Bạn có chắc muốn xóa môn học này không?")) {
            var ID = $("#xoa_danhsachmon").val();
            $.ajax({
                type: "GET",
                url: "{{ route('xoamonhoc.check') }}",
                data: { id: ID },
                dataType: "text",
                success: function (response) {
                    alert(response);
                    getListSubject();
                    $("#closeXoaMH").trigger('click');
                },
                error: function () {
                    alert("Có lỗi xảy ra, vui lòng thử lại");
                }
            });
        }

    });

    $("#sua_danhsachmon").change(function (e) {
        $("#sua_SubjectName").val($("#sua_danhsachmon option:selected").text());

    });


    //click them cau hoi
    // $("#btnThemCauHoi").unbind('click');
    $("#btnThemCauHoi").click(function () {
        var cauhoi = {};
        cauhoi.noiDung = $("#noiDungCauHoi").val();
        cauhoi.IDMH = $("#danhsachmon").val();
        cauhoi.doKho = $("#doKho").val();
        cauhoi.nhom = $("#Nhom1").val();
        cauhoi.dapAn = [];
        $("#dapAn textarea").each(function (index, element) {
            var da = {};
            da.noiDung = $(this).val();
            da.dapAn = $("#dapAn" + index).is(':checked');
            cauhoi.dapAn.push(da);
        });
        if (cauhoi.noiDung.trim() == '' || cauhoi.noiDung == null) {
            alert("Chưa nhập nội dung");
        }
        else {
            var kt = false, kt2 = true;
            for (var i = 0; i < cauhoi.dapAn.length; i++) {
                if (cauhoi.dapAn[i].noiDung.trim() == '' || cauhoi.dapAn[i].noiDung == null) {
                    kt2 = false;
                    break;
                }
                if (cauhoi.dapAn[i].dapAn == true) {
                    kt = true;
                }
            }
            if (!kt2) {
                alert("Chưa nhập nội dung câu hỏi");
            }
            else if (!kt) {
                alert("Chưa chọn đáp án đúng");
            }
            else {
                $.ajax({
                    type: "GET",
                    url: "{{ route('themcauhoi.check') }}",
                    data: { data: JSON.stringify(cauhoi) },
                    dataType: "text",
                    success: function (response) {
                        alert(response);
                        $("#closeThemCauHoi").trigger('click');
                        $("#noiDungCauHoi").val("");
                        loadDapAn(4);
                        getQuestion(idClick);
                    },
                    error: function () {
                        alert("Có lỗi xảy ra");
                    }
                });
            }
        }
    });

    function loadDapAn(x) {
        var s = "<ol type='A'>";
        for (var i = 0; i < x; i++) {
            s += "<li>";
            s += "<input type='radio' name='dapan' id='dapAn" + i + "'>";
            s += "<textarea type='text'></textarea>";
            s += "</li>";
        }
        s += "</ol>";
        $("#dapAn").html(s);

    }
    loadDapAn(4);

    $("#soLuongDapAn").change(function () {
        var x = $(this).val();
        loadDapAn(x);
    });

    $("#gioBatDau").val((new Date((new Date).getTime() + 25200000)).toISOString().slice(0,16));
    $("#gioKetThuc").val((new Date((new Date).getTime() + 28800000)).toISOString().slice(0,16));
    //click them lich thi
    $("#btnThemLichThhi").click(function () { 
        var start= Date.parse($("#gioBatDau").val());
        var end= Date.parse($("#gioKetThuc").val());
        var x = $("#gioBatDau").val();
        var y = $("#gioKetThuc").val();
        if(start>end || end<Date.parse(new Date) || x=="" || y==""){
            alert("Thời gian không hợp lệ");
        }
        else{
            $.ajax({
                type: "GET",
                url: "{{ route('caithoigian.check') }}",
                data: {batDau:$("#gioBatDau").val(),
                        ketThuc:$("#gioKetThuc").val(),
                        IDMH: idClick
                    },
                dataType: "text",
                success: function (response) {
                    alert(response);
                    if(response!="Trùng lịch thi"){
                        $("#closeLichThi").trigger('click');
                    }
                },
                error:function(){
                    alert("Có lỗi xảy ra, vui lòng thử lại");
                }
            });
        }
    });
    //click them cau truc
    $("#btnThemCauTruc").click(function(){
        var nhomch = $("#nhomch").val();

        if(nhomch.trim() == '' || nhomch == null){
            alert("Chưa nhập nội dung");
        }
        else{
            $.ajax({
                type: "GET",
                url: "{{ route('themcautruc.check') }}",
                data: {MucDo:$("#mucdo").val(),
                        NhomCH:$("#nhomch").val(),
                        SoLuong:$("#soluongcauhoi").val(),
                        IDMH: idClick
                    },
                dataType: "text",
                success: function (response) {
                    alert(response);
                    if(response!="Trùng cấu trúc thi"){
                        $("#closeQLCTMT").trigger('click');
                    }
                },
                error:function(){
                    alert("Có lỗi xảy ra, vui lòng thử lại");
                }
            });


        }

    });

    $("#btnQLDT").click(function () { 
       $.ajax({
           type: "GET",
           url: "{{ route('laysocauhoi.check') }}",
           data: {IDMH: idClick},
           dataType: "text",
           success: function (response) {
               $("#soLuongCauHoi").val(response);
           }
       });
        
     });
    // //click quan ly de thi
    $("#btnOK").click(function () { 
        var soLuongCauHoi = $("#soLuongCauHoi").val();
        $.ajax({
            type: "GET",
            url: "{{ route('caisocauhoi.check') }}",
            data: {
                IDMH: idClick,
                SL: soLuongCauHoi
            },
            dataType: "text",
            success: function (response) {
                alert(response);
                $("#closeQLDT").trigger('click');
            },
            error: function() {
                alert("Có lỗi xảy ra, vui lòng thử lại");
            }
        });
});

    $(".btnDangXuat").click(function () { 
        window.location.href = "{{ route('logout.view') }}";
    });
    $("#btnThemTK").click(function () { 
        var tenDangNhap = $("#tenDangNhap").val();
        var matKhau = $("#matKhau").val();
        $.ajax({
            type: "GET",
            url: "{{ route('taotaikhoan.create') }}",
            data: {
                tenTK: tenDangNhap,
                mK : matKhau
            },
            dataType: "text",
            success: function (response) {
                alert(response);
                $("#closeThemTK").trigger('click');
            }
        });
    });

    //lay danh sach cau truc thi
    $("#btnQLCTMT").click(function() {
        $.ajax({
             type: "GET",
            url: "{{ route('laycautruc.check') }}",
            data: {IDMH : idClick},
           dataType: "text",
            success: function (response) {
            var data = JSON.parse(response);
            var s="<table class= 'table table-bordered'>";
                s+= "<tr>";
                s+= "<th>";
                s+="Mức độ";
                s+="</th>";
                s+= "<th>";
                s+="Nhóm";
                s+="</th>";
                s+= "<th>";
                s+="Số lượng";
                s+="</th>";
                s+= "<th>";
                s+="Thao tác";
                s+="</th>";
                $(data).each(function (index, e) {
                    s+="<tr>"
                    s+="<td>";
                    s+= e.mucdo;
                    s+="</td>";
                    s+="<td>";
                    s+= e.nhom;
                    s+="</td>";
                    s+="<td>";
                    s+= e.soluong;
                    s+="</td>";
                    s+="<td>";
                    s+= "<a class='" + e.mucdo + "' id='" + e.nhom + "'><span class='glyphicon glyphicon-trash'></span> Xóa </a>"
                    s+="</td>";
                    s+="</tr>";
                });
                s+="</tr>"
                s+="</table>";
                $("#cautruc").html(s);
                $("#cautruc a").click(function () { 
                    var id = $(this).attr('id');
                    var na = $(this).attr('class');
                    if(confirm("Bạn có muốn xóa cấu trúc thi này không?")){
                        $.ajax({
                            type: "GET",
                            url: "{{ route('xoacautruc.check') }}",
                            data: {ID:id,
                                    NA:na},
                            dataType: "text",
                            success: function (response) {
                                alert(response);
                                $("#closeLichThi").trigger('click');
                            }
                        });
                    }
                });
            },


            
        
            error: function(){
                alert("Có lỗi xảy ra, vui lòng thử lại");
            }
        });

    });
    //lay danh sach lich thi
    $("#btnLichThi").click(function () { 
        $.ajax({
            type: "GET",
            url: "{{ route('laythoigianthi.check') }}",
            data: {IDMH : idClick},
            dataType: "text",
            success: function (response) {
                var data = JSON.parse(response);
                var s="<table class= 'table table-bordered'>";
                s+= "<tr>";
                s+= "<th>";
                s+="Thời gian bắt đầu";
                s+="</th>";
                s+= "<th>";
                s+="Thời gian kết thúc";
                s+="</th>";
                s+= "<th>";
                s+="Thao tác";
                s+="</th>";
                $(data).each(function (index, e) {
                    s+="<tr>"
                    s+="<td>";
                    s+= e.start;
                    s+="</td>";
                    s+="<td>";
                    s+= e.end;
                    s+="</td>";
                    s+="<td>";
                    s+= "<a id='" + e.ID + "'><span class='glyphicon glyphicon-trash'></span> Xóa </a>"
                    s+="</td>";
                    s+="</tr>";
                });
                s+="</tr>"
                s+="</table>";
                $("#lichthi").html(s);
                //click xoa lich thi
                $("#lichthi a").click(function () { 
                    var id = $(this).attr('id');
                    if(confirm("Bạn có muốn xóa lịch thi này không?")){
                        $.ajax({
                            type: "GET",
                            url: "{{ route('xoathoigianthi.check') }}",
                            data: {ID:id},
                            dataType: "text",
                            success: function (response) {
                                alert(response);
                                $("#closeLichThi").trigger('click');
                            }
                        });
                    }
                });
            },
            error: function(){
                alert("Có lỗi xảy ra, vui lòng thử lại");
            }
        });
     });

    
});

</script>