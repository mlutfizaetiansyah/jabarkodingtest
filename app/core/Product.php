<?php

namespace Entitiy;

class Product
{
    private $namaproduct;
    private $deskripsi;
    private $gambar;
    private $harga;
    public function __construct(
        string $namaproduct,
        string $deskripsi,
        string $gambar,
        int $harga
    ) {
        $this->$namaproduct = $namaproduct;
        $this->$deskripsi = $deskripsi;
        $this->gambar = $gambar;
        $this->harga = $harga;
    }

    /**
     * Get the value of harga
     */
    public function getHarga()
    {
        return $this->harga;
    }

    /**
     * Set the value of harga
     *
     * @return  self
     */
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    /**
     * Get the value of gambar
     */
    public function getGambar()
    {
        return $this->gambar;
    }

    /**
     * Set the value of gambar
     *
     * @return  self
     */
    public function setGambar($gambar)
    {
        $this->gambar = $gambar;
    }

    /**
     * Get the value of deskripsi
     */
    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    /**
     * Set the value of deskripsi
     *
     * @return  self
     */
    public function setDeskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;
    }

    /**
     * Get the value of namaproduct
     */
    public function getNamaproduct()
    {
        return $this->namaproduct;
    }

    /**
     * Set the value of namaproduct
     *
     * @return  self
     */
    public function setNamaproduct($namaproduct)
    {
        $this->namaproduct = $namaproduct;
    }
}
