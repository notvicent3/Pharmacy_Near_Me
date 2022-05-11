@extends('layouts.masterAdmin')
@section('admin_pages')


<div class="wrapper bg-white">
    <div class="row  ">
        <div class="col-8 col-m-8 col-sm-8">
        <div class="card bg-white m-5">

            <div class="card-header d-flex justify-content-between">
                <h3>تعديل عميل</h3>
            </div>
            <div class="card-content">
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {!! session('error') !!}
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {!! session('status') !!}
                </div>
            @endif
    <form action={{route('admin-update_Customers',['id'=>$customer->id])}} method="POST">
    <div class="mb-3">
                    <label for="exampleInputName" class="form-label">صورة العميل</label>
                    <input type="file" class="form-control" value="{{$customer->avater}}" id="exampleInputName">
    </div>


    <div class="row g-3">
        <div class="mb-3 col-6">
                    <label for="exampleInputName" class="form-label">اسم العميل</label>
                    <input type="text" class="form-control" value= {{$customer->name}} id="exampleInputName">
                </div>

            <div class="mb-3 col-6">
                <label for="exampleInputLink" class="form-label">تاريخ الميلاد</label>
                <input type="date" class="form-control" value={{$customer->dob}} id="exampleInputName">
            </div>

    </div>

    <div class="row g-3">

            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">رقم الهاتف</label>
                <input type="text" class="form-control" value={{$customer->phone}} id="exampleFormControlInput1">
            </div>

            <div class="mb-3 col-4">
                <label for="exampleInputLink" class="form-label"> الجنس</label>
                    <select class="form-select" aria-label="Default select example">
                        @if ($customer->gender=='ذكر')
                        <option selected> ذكر </option>
                        @else
                        <option selected value="1">انثى</option>
                        @endif


                    </select>
            </div>

    </div>

            <div class="mb-3 col-6">
                <label for="exampleInputLink" class="form-label">العنوان</label>
                <input type="text" class="form-control" value={{$customer->phone}} id="exampleInputName">
            </div>

            <div class="row g-3">


            <div class="mb-3 col-6">

            <a href="" data-bs-toggle= "modal" data-bs-target="#addemail">تعديل البريد الكتروني</a>

            </div>


            <div class="mb-3 col-6">

            <a href="" data-bs-toggle= "modal" data-bs-target="#addpassword"> تعديل كلمة المرور</a>

            </div>





            </div>

            <button  id="edit_button"  type="submit" class="btn btn-primary">تعديل</button>
    </form>

            </div>
        </div>
</div>





                                <form class="modal" method="POST" action={{route('_admin-updateEmail')}}  id="addemail"  tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">تعديل البريد الكتروني  </h5>
                                            </div>
                                            <div class="modal-body">
                                            <div class="mb-3 col-12">
                                                <label for="exampleFormControlInput1" class="form-label"> البريد الالكتروني</label>
                                                <input type="email" name="email" value={{$customer->email}} class="form-control" id="exampleFormControlInput1">
                                            </div>
                                            <div class="mb-3 col-12">
                                                <label for="exampleFormControlInput1" class="form-label">  ادخل رقم التأكيد</label>
                                                <input type="text" class="form-control" name="code" id="exampleFormControlInput1">
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">تعديل الايميل</button>
                                            </div>
                                            </div>
                                        </div>
                                    </form>


                                <form action={{route('_admin-updatePassword',['id'=>$customer->id])}}  method="POST" class="modal"  id="addpassword"  tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">تعديل كلمة المرور   </h5>
                                            </div>
                                            <div class="modal-body">

                                            <div class="mb-3 col-12">
                                                <label for="exampleFormControlInput1" class="form-label">  كلمة المرور القديمة</label>
                                                <input type="text" name="password" class="form-control" id="exampleFormControlInput1">
                                            </div>
                                            <div class="mb-3 col-12">
                                                <label for="exampleFormControlInput1" class="form-label">  كلمة المرور الجديدة</label>
                                                <input type="text"  name="new-password" class="form-control" id="exampleFormControlInput1">
                                            </div>

                                            <div class="mb-3 col-12">
                                                <label for="exampleFormControlInput1" class="form-label">    تأكيد كلمة المرور</label>
                                                <input type="text" name="confirme"  class="form-control" id="exampleFormControlInput1">
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">اضافة</button>
                                            </div>
                                            </div>
                                        </div>
                                    </form>

@stop
