<x-backend.layout.master>
   
    <x-slot:title>
        Product
    </x-slot>

    <x-slot:pageTitle>
        PRODUCT
    </x-slot>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    ALL PRODUCTS
                    <a class="btn btn-success waves-effect pull-right" href="{{ route('admin.product.create') }}">
                        <i class="material-icons">add</i>
                        <span>Add New Product</span>
                    </a>
                </h2><br>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>TShirt</td>
                                <td>Boys</td>
                                <td>Casual</td>
                                <td>520</td>
                                <td class="text-center" style="white-space:nowrap;">
                                    <a href="{{ route('admin.product.show', "1") }}" class="btn btn-info waves-effect" data-toggle="tooltip" data-placement="top" title="SHOW">
                                        <i class="material-icons">visibility</i>
                                    </a>
                                    <a href="{{ route('admin.product.edit', "1") }}" class="btn btn-warning waves-effect" data-toggle="tooltip" data-placement="top" title="EDIT">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="{{ route('admin.product.destroy', "1") }}" class="btn btn-danger waves-effect" data-toggle="tooltip" data-placement="top" title="DELETE">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jeans</td>
                                <td>Boys</td>
                                <td>Casual</td>
                                <td>1500</td>
                                <td class="text-center" style="white-space:nowrap;">
                                    <a href="{{ route('admin.product.show', "2") }}" class="btn btn-info waves-effect" data-toggle="tooltip" data-placement="top" title="SHOW">
                                        <i class="material-icons">visibility</i>
                                    </a>
                                    <a href="{{ route('admin.product.edit', "2") }}" class="btn btn-warning waves-effect" data-toggle="tooltip" data-placement="top" title="EDIT">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="{{ route('admin.product.destroy', "2") }}" class="btn btn-danger waves-effect" data-toggle="tooltip" data-placement="top" title="DELETE">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('css')
    {{-- JQuery DataTable Css --}}
    <link href="{{ asset('ui/backend/assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush

@push('js')
    {{-- Jquery DataTable Plugin Js --}}
    <script src="{{ asset('ui/backend/assets/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('ui/backend/assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('ui/backend/assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('ui/backend/assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('ui/backend/assets/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('ui/backend/assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('ui/backend/assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('ui/backend/assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('ui/backend/assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
    {{-- Jquery DataTable --}}
    <script src="{{ asset('ui/backend/assets/js/pages/tables/jquery-datatable.js') }}"></script>

    {{-- Show Tooltop on Buttons --}}
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

@endpush

</x-backend.layout.master>