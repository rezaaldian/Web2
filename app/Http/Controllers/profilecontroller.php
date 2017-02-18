public function formsederhana()
{
        return View::make('formsederhana');
}
 
public function postformsederhana()
{
        $nama = Input::get('nama');
        $jeniskelamin = Input::get('jeniskelamin');
        $alamat = Input::get('alamat');
 
        return 'Nama : '.$nama.'<br/> Jenis Kelamin : '.$jeniskelamin.'<br/> Alamat '.$alamat;
}