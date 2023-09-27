<?php

    // ตรวจสอบว่ามีการส่งข้อมูลผ่าน POST หรือไม่
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับข้อมูลจากฟอร์ม
        $name = $_POST['m_name'];
        $lastname = $_POST['m_lastname'];
        $email = $_POST['m_email'];
        $movie_id = $_POST['movie_name'];

        // ทำการเชื่อมต่อฐานข้อมูล
        $conn = new mysqli('localhost', 'root', '', 'dvdshop');
        $conn->query("SET NAMES utf8");

        // ตรวจสอบการเชื่อมต่อ
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // ตรวจสอบว่าหนังที่เลือกซื้อมีข้อมูลในตาราง dvd หรือไม่
        $check_movie_query = "SELECT * FROM movie WHERE movie_name = '$movie_id'";
        $check_movie_result = $conn->query($check_movie_query);

        if ($check_movie_result->num_rows > 0) {
            // หนังมีในตาราง dvd, ทำการบันทึกข้อมูลการสั่งซื้อ
            $insert_order_query = "INSERT INTO shop_member (s_name, s_lastname, s_email, s_movie_name) VALUES ('$name', '$lastname', '$email', '$movie_id')";

            if ($conn->query($insert_order_query) === TRUE) {
                echo "บันทึกข้อมูลการสั่งซื้อสำเร็จ";
            } else {
                echo "Error: " . $insert_order_query . "<br>" . $conn->error;
            }
        } else {
            echo "ไม่พบข้อมูลหนังที่เลือกซื้อในระบบ";
        }
        header("refresh: 1; url=http://localhost/Homework/buy.php");

        // ปิดการเชื่อมต่อฐานข้อมูล
        $conn->close();
    }
?>
