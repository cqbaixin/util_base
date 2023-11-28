<?php


namespace App\Ip;


use \GeoIp2\Database\Reader;

class IpGeo
{
    /**
     * @var Reader GeoIp2\Database\Reader
     */
    public $reade_country;

    public $reader_city;

    public $reade_asn;

    public function __construct()
    {
        $this->reader_city = new Reader('./resource/GeoLite2-City.mmdb');
        $this->reade_country = new Reader('./resource/GeoLite2-Country.mmdb');
        $this->reade_asn = new Reader('./resource/GeoLite2-ASN.mmdb');
    }

    public function getGeoByIp($ip)
    {
        $reader_city = $this->reader_city->city($ip);
        $reade_country = $this->reade_country->country($ip);
        $reade_asn = $this->reade_asn->asn($ip);
        echo json_encode($reader_city->jsonSerialize())."\n";
        echo json_encode($reade_country->jsonSerialize())."\n";
        echo json_encode($reade_asn->jsonSerialize())."\n";
    }
}