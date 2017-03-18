# ทดลองเขียน Dockerfile กัน
ตัวอย่างนี้ จะมาลองเขียน Dockerfile สำหรับโปรเจ็คที่ใช้ภาษา PHP

1. สร้างโฟล์เดอร์สำหรับเก็บไฟล์ project และไฟล์ Dockerfile
2. ศึกษาการใช้งาน official docker image ของ php ได้จาก [https://hub.docker.com/_/php/](https://hub.docker.com/_/php/)
3. นำสิ่งที่ศึกษา ประยุกต์เขียน Dockerfile โดยที่ให้เลือกสร้างเป็น php-apache และมี extension ตามนี้
- iconv 
- mcrypt 
- mysqli 
- mbstring 
- intl 
- calendar
- gd
4. สร้าง container จาก image ที่มาจาก dockerfile ที่สร้าง แล้วทำการ map volume ระหว่าง container กับ local ในส่วนของ data (php-test:/var/www/html) กับ และทำการ map port ของ container กับ local เป็น 8090:80
5. ทดลองเข้า http://localhost:8080/phpinfo.php แล้วดูผล