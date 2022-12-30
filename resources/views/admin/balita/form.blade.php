  <!-- Modal ADD -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Balita</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form class="form" action="{{ route('admin.add.balita') }}" method="POST" data-parsley-validate>
                    @csrf
                      <div class="row">
                          <div class="col-md-6 col-12">
                              <div class="form-group mandatory">
                                  <label for="nama_balita" class="form-label">Nama Balita</label>
                                  <input type="text" id="nama_balita" class="form-control" placeholder="Nama Balita"
                                      name="nama_balita" data-parsley-required="true" required>
                              </div>
                          </div>
                          <div class="col-md-6 col-12">
                              <div class="form-group mandatory">
                                  <label for="tl_balita" class="form-label">Tanggal Lahir</label>
                                  <input type="date" id="tl_balita" class="form-control" placeholder=""
                                      name="tl_balita" data-parsley-required="true" required>
                              </div>
                          </div>
                          <div class="col-md-4 col-12">
                              <div class="form-group mandatory">
                                  <label for="city-column" class="form-label">Jenis Kelamin</label>
                                  <select class="form-select" aria-label="select-gender" name="jk" required>
                                      <option selected disabled>--Pilih--</option>
                                      <option value="Laki-laki">Laki-laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4 col-12">
                              <div class="form-group mandatory">
                                  <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                  <input type="text" id="nama_ibu" class="form-control" placeholder="Nama Ibu"
                                      name="nama_ibu" data-parsley-required="true" required>
                              </div>
                          </div>
                          <div class="col-md-4 col-12">
                              <div class="form-group mandatory">
                                  <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                  <input type="text" id="nama_ayah" class="form-control" placeholder="Nama Ayah"
                                      name="nama_ayah" data-parsley-required="true" required>
                              </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group mandatory">
                                    <label for="panjang_badan" class="form-label">Panjang Badan (Cm)</label>
                                    <input type="number" min="1" id="panjang_badan" class="form-control" placeholder="" name="panjang_badan" data-parsley-required="true" required>
                                </div>
                            </div>
                          <div class="col-md-4 col-12">
                            <div class="form-group mandatory">
                                <label for="berat_lahir" class="form-label">Berat Lahir (Kg)</label>
                                <input type="number" min="1" id="berat_lahir" class="form-control" placeholder="" name="berat_lahir" data-parsley-required="true" required>
                            </div>
                        </div>
                          <div class="col-md-4 col-12">
                            <div class="form-group mandatory">
                                <label for="lingkar_kepala" class="form-label">Lingkar Kepala (Cm)</label>
                                <input type="number" id="lingkar_kepala" class="form-control" placeholder="" name="lingkar_kepala" data-parsley-required="true" required>
                            </div>
                        </div>
                          <div class="col-12">
                              <div class='form-group'>
                                  <div class="form-check mandatory">
                                      <input type="checkbox" id="checkbox5" class='form-check-input' checked
                                          data-parsley-required="true"
                                          data-parsley-error-message="You have to accept our terms and conditions to proceed.">
                                      <label for="checkbox5" class="form-check-label form-label">I accept these terms
                                          and conditions.</label>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <div class='form-group mandatory'>
                                  <fieldset>
                                      <label class="form-label">
                                          Favourite Colour
                                      </label>
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault"
                                              id="flexRadioDefault1" data-parsley-required="true">
                                          <label class="form-check-label form-label" for="flexRadioDefault1">
                                              Red
                                          </label>
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="flexRadioDefault"
                                              id="flexRadioDefault2">
                                          <label class="form-check-label form-label" for="flexRadioDefault2">
                                              Blue
                                          </label>
                                      </div>
                                  </fieldset>
                              </div>
                          </div>
                      </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </div>
      </div>
  </div>
  </form>

  {{-- MODAL DELETE --}}

  @foreach ($balita as $b)
    <div class="modal fade" id="delete-balita{{ $b->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action={{ url('/delete/data/balita/' . $b->id) }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <center class="mt-3">
                            <h5>
                                apakah anda yakin ingin menghapus data ini?
                            </h5>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-danger">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
