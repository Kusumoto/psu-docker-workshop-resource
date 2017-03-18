# ทบทวนคำสั่งที่ใช้ในการจัดการ docker swarm เบื้องต้น

1. สร้าง node ด้วย docker machine ขึ้นมา 3 node เพื่อจำลองการทำ cluster
2. สร้าง swarm cluster ขึ้นมาในเครื่อง default
3. นำ 3 node ที่สร้างขึ้นมาใหม่ เข้าไป join ใน swarm cluster ในตำแหน่ง worker
4. สร้าง service ขึ้นมา โดยใช้ image nginx โดยตั้งชื่อ service ว่า webserver และ เปิด port ของ container ออกมา โดยกำหนดเป็น 8080:80 
5. ทำการปรับ scale service webserver ให้เป็น 3
6. ทำการ update service webserver ใหม่ เพื่อให้การปรับ scale มีผล
7. ทดลองเข้าเว็บไซต์ http://localhost:8080 เพื่อดูผล
8. ทดลองปิด node 1 ตัว ด้วย docker machine
9. ทดลองเข้าเว็บไซต์ http://localhost:8080 เพื่อดูผล
10. ทำการลบข้อมูลทั้งหมด (cleanup)