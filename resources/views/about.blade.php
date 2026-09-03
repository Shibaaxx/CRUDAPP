@extends('layout')

@section('content')

    <h1>About CRUD Application</h1>
        <p>ระบบ CRUD Application เป็นระบบสำหรับจัดการข้อมูล โดยผู้ใช้สามารถเพิ่ม แสดง แก้ไข และลบข้อมูลได้</p>

     <h2>CRUD คืออะไร?</h2>
                
     <li><strong>Create</strong>
                        - เพิ่มข้อมูล
     <li><strong>Read</strong>
                        -แสดงข้อมูล
     <li><strong>Update</strong>
                        -แก้ไขข้อมูล
     <li><strong>Delete</strong>
                        -ลบข้อมูล</li>  
                        <br>                       
    <h3>Technology</h3>
        <p>laravel, PHP, MySQL, Blade, HTML และ CSS</p>
        <br>
        <h4>Developer</h4>
        <p>ชื่อ-นามสกุล: ชนกวนันท์ ประสมศรี
        <p>รหัสนักศึกษา: 68319010004
                <br>
    <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
@endsection