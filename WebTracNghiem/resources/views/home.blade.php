@extends('layout')
@section('content')
@section('title','Home Page')
<div class="container-fluid">
    <div class="bg-banner">
        <h1>TRẮC NGHIỆM ONLINE</h1>
        <h3>ĐA DẠNG - THÔNG MINH - CHÍNH XÁC</h3>
    </div>
    <div class=" row justify-content-center">
        <div class="box col-12 col-lg-3 col-sm-12 relative hover-link">
            <h2> GIỚI THIỆU </h2>
            <div class="img">
                <img style="margin-bottom: 20px;" src="https://s.tracnghiem.net/assets/images/home/feature1.jpg" alt="Giới Thiệu">
            </div>
            <p>Là một trang web chuyên cung cấp các mẫu đề thi, cũng như cho phép người dùng có thể tự kiểm tra bản thân</p>

        </div>
        <div class="box col-12 col-lg-3 col-sm-12 relative hover-link">
            <h2> ĐỀ THI </h2>
            <div class="img">
                <img style="margin-bottom: 20px;" src="https://s.tracnghiem.net/assets/images/home/feature2.jpg" alt="Danh Sách">
            </div>

            <p>Nơi tổng hợp các đề thi đã và đang được sử dụng trong quá trình học tập của học sinh, sinh viên</p>
        </div>
        <div class="box ol-12 col-lg-3 col-sm-12 relative hover-link">
            <h2> ĐÁP ÁN </h2>
            <div class="img">
                <img style="margin-bottom: 20px;" src="https://s.tracnghiem.net/assets/images/home/feature3.jpg" alt="Đề Thi">
            </div>

            <p>Khi thực hiện kiểm tra thông qua hệ thống đề thi có sẵn, người dùng có thể trực tiếp xem đáp án sau khi hoàn thành</p>
        </div>
    </div>

</div>

@stop