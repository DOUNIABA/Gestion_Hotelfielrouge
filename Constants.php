<?php
const CHAMBRE_TYPE_SINGLE=0;
const CHAMBRE_TYPE_DOUBLE=1;
const CHAMBRE_TYPE_TWEEN=2;
const CHAMBRE_TYPE_LUXE=3;
const CHAMBRE_TYPES=[CHAMBRE_TYPE_SINGLE,CHAMBRE_TYPE_DOUBLE,CHAMBRE_TYPE_TWEEN,CHAMBRE_TYPE_LUXE];
function getChambreTypeText($type){
    switch($type){
        case CHAMBRE_TYPE_SINGLE:
            return 'Single';
        case CHAMBRE_TYPE_DOUBLE:
            return 'Double';
        case CHAMBRE_TYPE_TWEEN:
            return 'Tween';
        case CHAMBRE_TYPE_LUXE:
            return 'Luxe';   
            default: return 'Type non difini';
    }
}
const RESERVATION_STATUS_ACCEPTED=1;
const RESERVATION_STATUS_REJECTED=0;
const RESERVATION_STATUS_PENDING=2;

function getStatusText(int $status){
        switch ($status) {
            case RESERVATION_STATUS_ACCEPTED :
                return 'accepté';
            case RESERVATION_STATUS_REJECTED :
                return 'refusé';
            case RESERVATION_STATUS_PENDING :
                return 'En attent';
            default:
            return 'non connu';
                break;
            }
}