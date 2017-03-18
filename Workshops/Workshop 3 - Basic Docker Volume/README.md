# ทบทวนคำสั่งที่ใช้ในการจัดการ Volume ของ Container เบื้องต้น

1. สร้าง docker container จาก image nginx และทำการ mount volume เอาไว้ โดยทำการชี้ mount volume ไปที่ ./data/:/usr/share/nginx/html และทำการ map port ของ container กับ local เป็น 8090:80 ตั้งชื่อ container ว่า nginx1
2. สร้าง docker container จาก image nginx และทำการ mount volume เอาไว้ โดยทำการชี้ mount volume จาก container nginx1 และทำการ map port ของ container กับ local เป็น 8091:80 ตั้งชื่อ container ว่า nginx2
3. สร้าง docker container จาก image nginx และทำการ mount volume เอาไว้ โดยทำการชี้ mount volume จาก container nginx1 และทำการ map port ของ container กับ local เป็น 8092:80 ตั้งชื่อ container ว่า nginx3
4. ทดลองเพิ่มไฟล์ index.html เพิ่มขึ้นมาใน /c/data/
5. ทดลองเข้า http://localhost:8090 http://localhost:8091 http://localhost:8092 แล้วดูผล
6. ลบสิ่งที่ทำออกทั้งหมด (Cleanup)
