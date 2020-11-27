<!-- regis Modal HTML -->
<div id="regisEmployeeModal" class="modal fade fontss">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">						
                <p class="modal-title"><img src="https://img.icons8.com/plasticine/100/000000/add-user-male.png" height="40" width="40">สมัครสมาชิก</p>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <form  id="register"name="register" method="get" action="register.php">	
                    <div class="form-group"> 
                         <label for="prefix">คำนำหน้า</label>
                        <select type ="text"class="form-control" name="prefix" id="prefix" >
                            <!-- <option>--เลือก--</option> -->
                            <option>นาย</option>
                            <option>นาง</option>
                            <option>นางสาว</option>									
                        </select>                                            
                    </div>              
                    <div class="form-group">
                         <label for="firstname">ชื่อ</label>
						<input type="text" class="form-control"  name="firstname" id="inputfirstname" required>
                    </div>  
                    <div class="form-group">
                        <label for="lastname">นามสกุล</label>
						<input type="text" class="form-control" name="lastname"  id="inputlastname" required>           
                    </div>                
                    <div class="form-group">  
                        <label for="username">อีเมลล์</label>
						<input type="text" class="form-control"  name="email" id="username"type="text" maxlength="255" placeholder="name@example.com" required>              
                    </div>                   
                    <div class="form-group">                
                        <label for="password">รหัสผ่าน</label>
						<input type="password" class="form-control" maxlength="8" name="password" id="password" type="password" placeholder="อย่างน้อย 8 ตัว" required>
                    </div>                
                    <div class="form-group">                
                        <label for="confirmpassword">ยืนยันรหัสผ่าน</label>
						<input type="password" class="form-control" maxlength="8" name="password1" id="password" type="password" placeholder="ยืนยันรหัสผ่านอีกครั้ง" required>               
                    </div>                
                    <div class="form-group">                
                         <label for="tel">เบอร์โทรศัพท์</label>
						<input type="text" class="form-control" name="tel" id="tel"onkeypress="return check_number()" maxlength="10" required>
                    </div>
                    <div class="form-group"> 
                      <table>                  
                        <tr>                
                          <td width="100"><label for="Phonenumber"><b>เบอร์มือถือ :<b></label></td>
                          <td width="330"><input type="phonenumber" name = "PhoneNumber" minlength="10" maxlength="10"  class="form-control" placeholder="เช่น 091 999 9999" required></td>
                        </tr>
                      </table>            
                    </div>       
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                        <a class="btn btn-danger" href="login.php" role="button">ยกเลิก</a>
                    </div>
                </from>
            </div>
        </div>  
    </div>
</div>