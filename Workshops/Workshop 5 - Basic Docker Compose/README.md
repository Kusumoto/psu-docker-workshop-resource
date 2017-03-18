# ทบทวนการใช้งานและการเขียน docker compose

1. สร้างไฟล์ docker-compose.yml ขึ้นมา
2. ให้คุณเขียน docker-compose.yml ตาม requirement ดังนี้

- สร้าง docker network ขึ้นมา 2 network โดย driver เป็น bride ชื่อ front-tier และ back-tier 
- ต้องการ mysql เวอร์ชันล่าสุด ชื่อ service คือ mysql พร้อมกับ map volume ระหว่าง container กับ local ในส่วนของ data ใช้งาน network วง back-tier กำหนด root password เป็น 123456
- ต้องการ php-apache เวอร์ชันล่าสุด  พร้อมกับ map volume ระหว่าง container กับ local ในส่วนของ (./php-apache:/var/www/html) และทำการเปิด port ของ container ออกมา โดยกำหนดเป็น 8080:80 ใช้งาน network วง back-tier,front-tier

3. สั่งให้ docker compose ทำงานตามไฟล์ที่เขียนไว้
4. ทดลองเข้าเว็บไซต์ http://localhost:8080 เพื่อดูผล
5. สั่งให้ docker compose ยกเลิกการทำงานหมด