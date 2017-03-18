# ทบทวนคำสั่งที่ใช้ในการจัดการ Network เบื้องต้น

1. สร้าง Docker Network ขึ้นมาใหม่ โดยกำหนด Network driver เป็น bride กำหนด subnet เป็น 192.168.100.0/24 กำหนดช่วงของ IP เป็น 192.168.100.128/25 กำหนด Gateway เป็น 192.168.100.5 มีชื่อว่า network_public

2. สร้าง Docker Network ขึ้นมาใหม่ โดยกำหนด Network driver เป็น bride กำหนด subnet เป็น 192.168.101.0/24 กำหนดช่วงของ IP เป็น 192.168.101.128/25 กำหนด Gateway เป็น 192.168.101.5 มีชื่อว่า network_private

3. สร้าง Container จาก image kusumoto/test-node ใน network ที่ชื่อ ว่า network_private โดยตั้งชื่อ container ว่า node1 กำหนด IP เป็น 192.168.101.131

4. สร้าง Container จาก image kusumoto/test-network-node ใน network ที่ชื่อ ว่า network_private โดยตั้งชื่อ container ว่า node2 กำหนด IP เป็น 192.168.101.132

5. สร้าง Container จาก image kusumoto/test-network-nginx ใน network ที่ชื่อว่า network_private และทำการ map port จาก container ออกมายังเครื่อง local โดยกำหนด port เป็น 8080:80 กำหนด IP เป็น 192.168.101.130 
ตั้งชื่อ container ว่า nginx

5. สั่งให้ container nginx เชื่อมต่อกับ network network_public โดยให้ IP Address '192.168.100.130'

6. เข้าไปยัง shell ของ Container ของ nginx แล้วใช้คำสั่งดึงข้อมูลจากเว็บ (curl หรือ wget ก็ตามถนัด)

7. ลบสิ่งที่ทำออกทั้งหมด (Cleanup)



