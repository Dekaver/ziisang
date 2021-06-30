<x-app-layout>
    @section('content')
    <x-card header='Semiotika'>
        <x-form action="{{route('semiotika.store')}}" method="POST" enctype="multipart/form-data">

            <textarea class="form-control" id="summary-ckeditor" name="tentang"></textarea> 
            <div class="form-row">
                <div class="form-group col">
                    <label class="form-label">Tanggal</label>
                    <input type="date" min="2021/01/01" class="form-control" placeholder="Username" required>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group col">
                    <label class="form-label">Waktu</label>
                    <input type="time" class="form-control" placeholder="Username" required>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10"></textarea>
                <div class="clearfix"></div>
            </div>
            <div class="form-group">
                <label class="form-label">link</label>
                <input type="text" class="form-control" name="link" placeholder="https://bit.ly" required>
                <div class="clearfix"></div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label class="form-label">Alamat Lokasi</label>
                    <input type="text" class="form-control" placeholder="jl.... kelurahan, kecamatan, kabupaten" required>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label">Alamat GPS</label>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="number" class="form-control" placeholder="Longitude" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="number" class="form-control" placeholder="Latitude" required>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <x-button class="form-control" type="submit">SAVE</x-button>
        </x-form>
    </x-card>
    <a href="{{ asset('/storage/ckeditor/ckeditor.js') }}">tes</a>
    <script src="{{ asset('/storage/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script> 
    
    @endsection
</x-app-layout>
