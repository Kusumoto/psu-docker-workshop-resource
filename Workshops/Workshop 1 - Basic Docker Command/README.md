# ทบทวนคำสั่งที่ใช้ในการจัดการ Container เบื้องต้น

1. ทดลองสร้าง Container จาก image nginx ขึ้นมา โดยทำการ map port ของ container กับ local เป็น 8090:80 ให้ตั้งชื่อ container เป็น test-web
2. ทำการเข้าเว็บไซต์ http://localhost:8090 โดยใช้ web browser ที่ตัวเองถนัด หากขึ้นหน้า nginx ถือเป็นการเสร็จสิ้น
3. ทดลองหยุดการทำงานของ container test-web แล้วทดลองเข้าเว็บ http://localhost:8090 อีกครั้ง
4. ทดลองเริ่มการทำงานของ container test-web แล้วทดลองเข้าเว็บ http://localhost:8090 อีกครั้ง
5. ทดลองลบ  container test-web
6. ลบสิ่งที่ทำออกทั้งหมด (Cleanup)