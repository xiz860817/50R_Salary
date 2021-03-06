@extends('layouts.master')
@section('title','客戶列表')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-10">
    <div class="card">
      <div class="card-header">客戶列表</div>
      <div class="card-body p-1">
        <table class="table table-hover m-0">
          <thead class="thead-darty">
            <tr>
              <th>客戶編號</th>
              <th>客戶姓名</th>
              <th>客戶電話</th>
              <th>系統操作</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>A001</td>
              <td>王小明</td>
              <td>0912345678</td>
              <td>
                <a href="{{ route('employee',['employee_id' => $Employee_id -> employee -> Employee_id]) }}" class="btn btn-info btn-sm">查看</a>
                <a href="{{ action('employeeController@edit', ['Employee_id'=> $Employee_id-> employee -> Employee]) }}" class="btn btn-success btn-sm">編輯</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>  
    </div>
  </div>
</div>
@stop

action('EmployeeController@delete', 
                              ['id'=>$user->id,
                              'Name'=>$user->Name,
                              'Address'=>$user->Address,
                              'Phone'=>$user->Phone,
                              'Hourlypay'=>$user->Hourlypay ]),