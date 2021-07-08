@extends('admin.layouts.dashboard')
@section('content')
<div class="container-fluid">
  <!-- table transaksi -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Transaksi</h4>
        </div>
       <div class="card-body">
         
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="50px">No</th>
                  <th>ID</th>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Total</th>
                  <th>Bukti Pembayaran</th>
                  <th>Status</th>
                  <th>Opsi</th>
                  
                </tr>
               
              </thead>
              <tbody>
                
                <tr>
                
                  <td>
                
                  </td>
                  <td>
                
                  </td>
                  <td>
                
                  </td>
                
                  <td>
                
                  </td>
                  <td>
                
                  </td>
                  <td>
                
                  </td>
                  <td>
                
                  </td>
                  <td>
                
                  </td>
                  <td>
                   <!-- <a href="{{ route('transaksi.show',2) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Detail
                    </a>
                    <a href="{{ route('transaksi.edit',2) }}" class="btn btn-sm btn-primary mr-2 mb-2">
                      Edit
                    </a>
                    
                   
                      <button type="submit" class="btn btn-sm btn-danger mb-2">
                        Hapus
                      </button>   -->                 
                    
                  </td>
                  
                <h3>Tidak ada transaksi untuk saat ini</h3>
                
                </tr>
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection