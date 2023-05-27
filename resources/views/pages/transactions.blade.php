@extends('layouts.main')

@section('container')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transactions</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
        data-toggle="modal" data-target="#addTransactionModal"><i
        class="fas fa-plus fa-sm text-white-50"></i> Add Transaction</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" style="width:100%">
                <thead>
                    <tr>
                        <th style="width:15%">Date</th>
                        <th style="width:15%">Customer</th>
                        <th style="width:10%">Payment</th>
                        <th style="width:10%">Shipping</th>
                        <th style="width:30%">Description</th>
                        <th style="width:10%">Total Amount</th>
                        <th style="width:10%">Source</th>
                        <th style="width:15%">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Payment</th>
                        <th>Shipping</th>
                        <th>Description</th>
                        <th>Total Amount</th>
                        <th>Source</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($transactions as $data)

                    <tr>
                        <td>{{ $data->created_at }}</td>
                        <td>{{ $data->customer->name }}</td>
                        <td>{{ $data->payment_type }}</td>
                        <td>Rp{{ number_format($data->shipping_cost,0,',','.') }}</td>
                        <td>{{ $data->description }}</td>
                        <td>Rp{{ number_format($data->total_amount,0,',','.') }}</td>
                        <td>{{ $data->source }}</td>
                        <td>
                            <button class="btn btn-info edit-transaction-btn" data-toggle="modal"
                                data-target="#editTransactionModal" data-transaction="{{ json_encode($data) }}">
                                <i class="fa fa-edit"></i>
                            </button>
                            <form method="POST" action="{{ route('transactions.delete', [$data->id]) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini??')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Transaction Modal -->
<div class="modal fade" id="addTransactionModal" tabindex="-1" role="dialog" aria-labelledby="addTransactionModalLabel"
aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('transactions.add') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addTransactionModalLabel">Add Transaction</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="customer" class="col-md-4 col-lg-3 col-form-label">Customer</label>
                        <div class="col-md-8 col-lg-9">
                            <select name="customer" id="customer" class="form-control">
                                @foreach ($customer as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                            <input type="text" class="form-control" style="display:none"
                                id="newCustomer" name="newCustomer">
                            <div class="form-group form-check mt-2">
                                <input type="checkbox" class="form-check-input"
                                    id="addNewCustomer" name="addNewCustomer">
                                <label class="form-check-label" for="addNewCustomer">Add new customer ?</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="paymentType" class="col-md-4 col-lg-3 col-form-label">Payment_type</label>
                        <div class="col-md-8 col-lg-9">
                            <select name="paymentType" id="paymentType" class="form-control">
                                <option value="transfer">Transfer</option>
                                <option value="cash">Cash</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="shippingCost" class="col-md-4 col-lg-3 col-form-label">Shipping Cost</label>
                        <div class="col-md-8 col-lg-9">
                            <input type="number" class="form-control" id="shippingCost"
                                name="shippingCost" value="11000">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="totalAmount" class="col-md-4 col-lg-3 col-form-label">Total Amount</label>
                        <div class="col-md-8 col-lg-9">
                            <input type="number" class="form-control" id="totalAmount" name="totalAmount">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-lg-3 col-form-label">Description</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="source" class="col-md-4 col-lg-3 col-form-label">Source</label>
                        <div class="col-md-8 col-lg-9">
                            <select name="source" id="source" class="form-control">
                                <option value="direct">Direct</option>
                                <option value="marketplace">Marketplace</option>
                                <option value="website">Website</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Transaction Modal -->
<div class="modal fade" id="editTransactionModal" tabindex="-1"
    role="dialog" aria-labelledby="editTransactionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('transactions.update') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="editTransactionModalLabel">Update Transaction</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="transactionId" id="transactionId">
                    <div class="mb-3 row">
                        <label for="customer" class="col-md-4 col-lg-3 col-form-label">Customer</label>
                        <div class="col-md-8 col-lg-9">
                            <select name="customer" id="customer" class="form-control" readonly>
                                @foreach ($customer as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="paymentType" class="col-md-4 col-lg-3 col-form-label">Payment_type</label>
                        <div class="col-md-8 col-lg-9">
                            <select name="paymentType" id="paymentType" class="form-control">
                                <option value="transfer">Transfer</option>
                                <option value="cash">Cash</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="shippingCost" class="col-md-4 col-lg-3 col-form-label">Shipping Cost</label>
                        <div class="col-md-8 col-lg-9">
                            <input type="number" class="form-control" id="shippingCost" name="shippingCost">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="totalAmount" class="col-md-4 col-lg-3 col-form-label">Total Amount</label>
                        <div class="col-md-8 col-lg-9">
                            <input type="number" class="form-control" id="totalAmount" name="totalAmount">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-lg-3 col-form-label">Description</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="source" class="col-md-4 col-lg-3 col-form-label">Source</label>
                        <div class="col-md-8 col-lg-9">
                            <select name="source" id="source" class="form-control">
                                <option value="direct">Direct</option>
                                <option value="marketplace">Marketplace</option>
                                <option value="website">Website</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection