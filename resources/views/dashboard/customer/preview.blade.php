@extends('dashboard.layout.dashboard')

@section('section')
        <form action="/export" method="POST" enctype="multipart/form-data">
            @csrf
            <div hidden class="header-btn">
                <div id="div-physical">
                    <label>
                        <input id="rdb_physical" name="startDate" value='{{$old->startDate}}'
                               type="date" class="validate[required]">
                        Start Date
                    </label>
                </div>
                <div id="div-physical">
                    <label>
                        <input id="rdb_physical" name="endDate" value='{{$old->endDate}}'  type="date"
                               class="validate[required]">
                        End Date
                    </label>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Kota</label>
                    <input id="rdb_physical" name="kota" value='{{ array_key_exists('kota',$old) ? $old->kota:''}}'
                            type="text" class="validate[required]">

                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Solution</label>
                    @foreach ($solution as $item)

                        <input type='checkbox' name='solution[]'
                               value='{{$item->nama_solution}}' {{property_exists($old,'solution')? in_array($item->nama_solution,$old->solution) ? 'checked="checked"':'':''}}>{{$item->nama_solution}}
                        <br>

                    @endforeach


                </div>
                <div class="modal-body">
                    <div class="modal-footer" id="modal_footer">
{{--                        <input type="submit" class="btn btn-default mb-2" value="Export">--}}

                        {{-- <a href="/export" id="btnDonate" class="btn btn-default-border-blk">Donate</a> --}}
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-default mb-2">Export</button>

        </form>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <label> Preview Customer</label>
        
                    @include('dashboard.customer.widgets.result_customer', array('class'=>'table-hover'))
                </div>
            </div>
        </div>
      
       
@endsection
