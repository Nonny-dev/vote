<div class="password-form">
        <h2>เปลี่ยนรหัสผ่าน</h2>
        <form id="passwordChangeForm" onsubmit="return validateForm(event)">
            <div class="form-group">
                <label for="currentPassword">รหัสผ่านปัจจุบัน:</label>
                <input type="password" id="currentPassword" name="currentPassword" required>
            </div>
            
            <div class="form-group">
                <label for="newPassword">รหัสผ่านใหม่:</label>
                <input type="password" id="newPassword" name="newPassword" required>
                <div id="passwordError" class="error-text">
                    รหัสผ่านต้องมีความยาวอย่างน้อย 8 ตัวอักษร และประกอบด้วยตัวอักษรภาษาอังกฤษและตัวเลข
                </div>
            </div>
            
            <div class="form-group">
                <label for="confirmPassword">ยืนยันรหัสผ่านใหม่:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <div id="confirmError" class="error-text">
                    รหัสผ่านไม่ตรงกัน
                </div>
            </div>
            
            <button type="submit">เปลี่ยนรหัสผ่าน</button>
        </form>
    </div>