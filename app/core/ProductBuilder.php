<?php

namespace Entitiy;



class ProductBuilder
{
    private $namaproduct = "";
    private $deskripsi = "";
    private $gambar = "";
    private $harga = 0;

    /**
     * Set the value of harga
     *
     * @return  self
     */
    public function setHarga($harga)
    {
        $this->harga = $harga;

        return $this;
    }

    /**
     * Set the value of gambar
     *
     * @return  self
     */
    public function setGambar($gambar)
    {
        $this->gambar = $gambar;

        return $this;
    }

    /**
     * Set the value of deskripsi
     *
     * @return  self
     */
    public function setDeskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;

        return $this;
    }

    /**
     * Set the value of namaproduct
     *
     * @return  self
     */
    public function setNamaproduct($namaproduct)
    {
        $this->namaproduct = $namaproduct;

        return $this;
    }

    public function build(): Product
    {
        return new Product($this->namaproduct, $this->deskripsi, $this->gambar, $this->harga);
    }
}
