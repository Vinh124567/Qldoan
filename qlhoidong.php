
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <div class="content" style="display:inline-block; float: left;">
      <div class="form-control" style="display: inline-block;border-color: #C0C0C0;">
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label"><b>Tên hội đồng</b></label>
          <input style="padding: 10px;" type="text" name="txtTenhoidong" class="form-control" id="formGroupExampleInput1" placeholder="Tên hội đồng" >
        </div>
        <div class="mb-3"  >
          <label for="formGroupExampleInput2" class="form-label"><b>Danh sách hội đồng</b></label>
          <input style="padding: 10px;" type="text" name="txtDanhsachhoidong" class="form-control" id="formGroupExampleInput2" placeholder="Danh sách hội đồng">
        </div>
        <div class="mb-3" >
          <label for="formGroupExampleInput2" class="form-label"><b>Quyết định thành lập</b></label>
           <textarea id="formGroupExampleInput3" name="txtQuyetdinhthanhlap" class="form-control"  name="myTextarea" rows="10" cols="105"></textarea>
        </div>
      </div>
    </div>
    <div class="sidebar" style="display:inline-block;float: left; margin-left:20px;" >
         <div class="form-control" style="display:flex;flex-direction:column ; ">
            <div class="form-control" style="display:flex;flex-direction:column ;margin-bottom:10px;padding: 0px;">
                <div style="border-bottom:1px solid #DDDDDD ;height: 30px;"><p style="padding-left:15px ;color:#0099FF;"><b>Xuất Bản</b></p></div>
                <div style="margin: 10px;">
                    <input type="submit" name="btnLuudulieu" style="background-color:#00CCFF; "class="btn btn-success" value="Lưu dữ liệu">
                    <input type="button" name="btnReset" style="background-color:#00CCFF; "class="btn btn-success" value="Reset" id="reset">
                </div>
            </div>

            <div class="form-control" style="display:flex;flex-direction:column ;margin-bottom:15px ;padding: 0px; ">
                <div style="border-bottom:1px solid #DDDDDD ;height: 30px;"><p style="padding-left:15px ;color:#0099FF;"><b>Niên Khóa</b></p></div>
                <div class="btn-group" style="margin: 20px;">
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Chọn niên khóa</option>
                    </select>
                </div>
            </div>

            <div class="form-control" style="display:flex;flex-direction:column ;margin-bottom:10px ;padding: 0px; ">
                <div style="border-bottom:1px solid #DDDDDD ;height: 30px;"><p style="padding-left:15px ;color:#0099FF;"><b>Trạng thái</b></p></div>
                <div style="margin: 10px;">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Đã Duyệt</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Chưa Duyệt</label>
                    </div>
                </div>
            </div>
         </div>
    </div>
    </form>
    <script>
    var resetButton = document.getElementById("reset");
    var inputElement1 = document.getElementById("formGroupExampleInput1");
    var inputElement2 = document.getElementById("formGroupExampleInput2");
    var inputElement3 = document.getElementById("formGroupExampleInput3");
    resetButton.addEventListener("click", function(e) {

                inputElement1.value = "";
                inputElement2.value = "";
                inputElement3.value = "";      
    });
</script>

  </body>
   
</html>
        