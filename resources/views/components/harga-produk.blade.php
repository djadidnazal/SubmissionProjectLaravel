class HargaProduk extends component
{
    public function _construct(public int $nilai, public bool $diskon = false) {}

    public function format(): string
    {
        return 'Rp'. number_format($this->diskon ? $this->nilai * 0.9 : $this->nilai, ',', '.');
    }
    public function render() {return view('component.harga-produk'); }
}