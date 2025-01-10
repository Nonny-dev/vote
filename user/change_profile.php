<div class="password-form">
    <h2>เปลี่ยนรหัสผ่านและรูปโปรไฟล์</h2>
    
    <!-- Profile Picture Section -->
    <div class="profile-section">
        <div class="profile-picture">
            <img id="profilePreview" src="/api/placeholder/150/150" alt="รูปโปรไฟล์" class="profile-image">
            <div class="profile-upload">
                <label for="profilePicture" class="upload-label">
                    <span>อัปโหลดรูปภาพ</span>
                    <input type="file" id="profilePicture" name="profilePicture" accept="image/*" onchange="previewImage(event)">
                </label>
            </div>
        </div>
    </div>

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
        
        <button type="submit">บันทึกการเปลี่ยนแปลง</button>
    </form>
</div>
