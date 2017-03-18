# ทบทวนการใช้งาน docker machine

1. ทำการเปิด Docker Quickstart Terminal ขึ้นมา รอจนกว่าระบบจะพร้อม
2. ทำการตรวจสอบ Environment ของตัว docker machine
3. สร้าง node เพิ่มขึ้นมาใหม่ โดยใช้ driver ของ virtualbox กำหนดชื่อ node ว่า node1
4. ทำการเข้าถึง shell docker ของ node1
5. ทำการสร้าง container โดยใช้ image ของ nginx
6. ทำการใช้คำสั่ง list container ที่มีอยู่ใน node 
7. ทำการสลับ shell docker กลับมายัง node default
8. ทำการใช้คำสั่ง list container ที่มีอยู่ใน node อีกครั้ง
9. ทดสอบการหยุดการทำงานของ node1
10. ทำการลบ node1 ออก (Cleanup)