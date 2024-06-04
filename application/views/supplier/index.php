 <main>
     <div class="container-fluid px-4">
         <h1 class="mt-4">2210010156_Muhammad Mirza Maulana</h1>
         <ol class="breadcrumb mb-4">
             <li class="breadcrumb-item"><a href="<?php echo site_url('admin/user') ?>">User</a></li>
             <li class="breadcrumb-item active "><?php echo $title; ?></li>
         </ol>
         <div class="card bg-secondary mb-4">
             <div class="card-header bg-dark d-flex justify-content-end ">
                 <a class="btn btn-primary " href="<?php echo site_url('user/add') ?>"><i class="fas fa-plus"></i>Add New</a>
             </div>
             <?php if ($this->session->flashdata('success')) : ?>
                 <div class="alert alert-success" role="alert">
                     <?php $this->session->flashdata('success') ?>
                 </div>
             <?php endif; ?>
             <div class="card-body">
                 <div class="table-responsive rounded">
                     <table class="table rounded table-striped table-bordered table-dark" id="tabel-kelas" width="100%" cellspacing="0">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>ID</th>
                                 <th>Name</th>
                                 <th>Telpon</th>
                                 <th>Perusahaan</th>
                                 <th>Nama Bank</th>
                                 <th>Nama Akun Bank</th>
                                 <th>No Bank</th>
                                 <!-- <th class="d-flex justify-content-center">Action</th> -->
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $no = 1;
                                foreach ($supplier as $supplier) {
                                ?>
                                 <tr>
                                     <td><?php echo $no; ?></td>
                                     <td><?php echo $supplier->id; ?></td>
                                     <td><?php echo $supplier->name; ?></td>
                                     <td><?php echo $supplier->telp; ?></td>
                                     <td><?php echo $supplier->perusahaan; ?></td>
                                     <td><?php echo $supplier->nama_bank; ?></td>
                                     <td><?php echo $supplier->nama_akun_bank; ?></td>
                                     <td><?php echo $supplier->no_akun_bank; ?></td>

                                     <!-- <td>
                                         <div class="d-flex justify-content-center">
                                             <a href="<?php echo base_url(); ?>" class="btn btn-sm btn-warning me-1"><i class="fas fa-edit"></i> Edit</a>
                                             <a href="<?php echo base_url(); ?>" class="btn btn-sm btn-danger ms-1" onclick="return confirm('Ingin menghapus data user ini?');">
                                                 <i class="fas fa-trash"></i> Hapus
                                             </a>
                                         </div>
                                     </td> -->
                                 </tr>
                             <?php
                                    $no++;
                                }
                                ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>

         <div class="vh-100 "></div>
     </div>
 </main>