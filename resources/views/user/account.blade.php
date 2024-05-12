@extends('website.layouts.app')
@section('content')
    <style>
        /* Sidebar Styles */

        .sidebar{
            padding-top:40px;
        }
        .sidebar-area{
            width:280px;
            margin-left:58px;
            height:600px;
            border: 0.5px solid #e4e3e3;
            border-bottom: 0.5px solid #e4e3e3;

            /* background:red; */
        }
        .sidebar-header {

            padding-bottom: 20px;
            width:280px;
            margin-left:40px;
        }
        .sidebar-header h4{
            padding-left:4px;
            padding-top:10px;

        }
        .sidebar h4 {
        margin: 0;
        color: #333;

        }

        .sidebar-links {
        list-style-type: none;
        padding: 0;
        margin: 0;
        }

        .sidebar-links li {
            padding: 10px 0;
            border-bottom: 0.5px solid #c7c7c7;
            border-left: 0.5px solid #c7c7c7;
            cursor: pointer;
            margin-left:0px;

        }

        .sidebar-links li i{
            margin-right:10px;
        }

        .sidebar-links li:hover{
            background:#e4e4e0;
        }

        .sidebar-links li a {
        text-decoration: none;
        color: #555;
        font-size: 16px;
        transition: all 0.3s ease;
         padding-left:10px;
        }

        .sidebar-links li a:hover {
         color: #333;
        }

        .sider_container{
            /* background:red; */
            width:900px;
            border: 1px solid #e4e3e3;
            height:400px;
            margin-left:357px;
            margin-top:-600px;
        }
    </style>
        <div class="sidebar">

            {{-- <div class="sidebar-header">
                <h4>Dashboard</h4>
            </div> --}}
            <div class="sidebar-area">
                <div class="sidebar-header">
                    <h4>Dashboard</h4>
                </div>
                <ul class="sidebar-links">
                 <li><a href="#"><i class="fas fa-shopping-cart"></i>  Orders</a></li>
                <li><a href="#"><i class="fas fa-inbox"></i>  Inbox</a></li>
                <li><a href="#"><i class="fas fa-star"></i>  Pending Reviews</a></li>
                <li><a href="#"><i class="fas fa-user-cog"></i>  Account Management</a></li>
                <li><a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>  Logout</a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
            <div class="sider_container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="order-content">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Account Information</h6>
                                        <hr>
                                        <form action="">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name"
                                                            placeholder="Enter your name" readonly value="Andor Ofre">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email"
                                                            placeholder="Enter your email" readonly value="example@example.com">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row py-4">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" readonly
                                                            value="Andor Ofre">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" readonly
                                                            value="example@example.com">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>



@endsection
