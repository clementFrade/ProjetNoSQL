<?php
// projet redis MARIE FRADE

// Ce script php demande l'installation de php et de l'extension phpredis pour fonctionner


// connexion à la base de données redis (paramètre de connexion à eventuellemnt changer)
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$redis->flushDB();

// on commence par créer  des opérateurs défini par un id et un nom
// on stock leur id dans une liste
$idope = 1;
$arrayd = array(
    'idope'.(string)$idope => (string)$idope,
    'nomope'.(string)$idope => 'free'
);
$redis->mset($arrayd);
$redis->lPush('listope','free');

$idope = 2;
$arrayd = array(
    'idope'.(string)$idope => (string)$idope,
    'nomope'.(string)$idope => 'orange'
);
$redis->mset($arrayd);
$redis->lPush('listope','orange');

$idope = 3;
$arrayd = array(
    'idope'.(string)$idope => (string)$idope,
    'nomope'.(string)$idope => 'bouigue'
);
$redis->mset($arrayd);
$redis->lPush('listope','bouigue');

$idope = 4;
$arrayd = array(
    'idope'.(string)$idope => (string)$idope,
    'nomope'.(string)$idope => 'sfr'
);
$redis->mset($arrayd);
$redis->lPush('listope','sfr');


//On crée à présent une dizaine d'appel initialisé à "à effectuer"
//On les ajoute directement dans les listes corespondant à leur opérateur
$idapp = 1;
$arraya = array(
    'idapp'.(string)$idapp => (string)$idapp,
    'heure'.(string)$idapp => '10h30',
    'num'.(string)$idapp => '0654846456',
    'status'.(string)$idapp => 'aeffctuer',
    'operateur'.(string)$idapp => 'free'
);
$redis->mset($arraya);
$redis->lPush('list'.$redis->get('operateur'.$idapp),$idapp);
$redis->lPush('listaeffectuer',$idapp);


$idapp = 2;
$arraya = array(
    'idapp'.(string)$idapp => (string)$idapp,
    'heure'.(string)$idapp => '12h30',
    'num'.(string)$idapp => '0654111156',
    'status'.(string)$idapp => 'aeffctuer',
    'operateur'.(string)$idapp => 'free'
);
$redis->mset($arraya);
$redis->lPush('list'.$redis->get('operateur'.$idapp),$idapp);
$redis->lPush('listaeffectuer',$idapp);


$idapp = 3;
$arraya = array(
    'idapp'.(string)$idapp => (string)$idapp,
    'heure'.(string)$idapp => '10h00',
    'num'.(string)$idapp => '0622226456',
    'status'.(string)$idapp => 'aeffctuer',
    'operateur'.(string)$idapp => 'sfr'
);
$redis->mset($arraya);
$redis->lPush('list'.$redis->get('operateur'.$idapp),$idapp);
$redis->lPush('listaeffectuer',$idapp);


$idapp = 4;
$arraya = array(
    'idapp'.(string)$idapp => (string)$idapp,
    'heure'.(string)$idapp => '19h30',
    'num'.(string)$idapp => '0606846456',
    'status'.(string)$idapp => 'aeffctuer',
    'operateur'.(string)$idapp => 'free'
);
$redis->mset($arraya);
$redis->lPush('list'.$redis->get('operateur'.$idapp),$idapp);
$redis->lPush('listaeffectuer',$idapp);


$idapp = 5;
$arraya = array(
    'idapp'.(string)$idapp => (string)$idapp,
    'heure'.(string)$idapp => '10h40',
    'num'.(string)$idapp => '0654333356',
    'status'.(string)$idapp => 'aeffctuer',
    'operateur'.(string)$idapp => 'orange'
);
$redis->mset($arraya);
$redis->lPush('list'.$redis->get('operateur'.$idapp),$idapp);
$redis->lPush('listaeffectuer',$idapp);


$idapp = 6;
$arraya = array(
    'idapp'.(string)$idapp => (string)$idapp,
    'heure'.(string)$idapp => '9h30',
    'num'.(string)$idapp => '0699946456',
    'status'.(string)$idapp => 'aeffctuer',
    'operateur'.(string)$idapp => 'orange'
);
$redis->mset($arraya);
$redis->lPush('list'.$redis->get('operateur'.$idapp),$idapp);
$redis->lPush('listaeffectuer',$idapp);


$idapp = 7;
$arraya = array(
    'idapp'.(string)$idapp => (string)$idapp,
    'heure'.(string)$idapp => '14h50',
    'num'.(string)$idapp => '0654865456',
    'status'.(string)$idapp => 'aeffctuer',
    'operateur'.(string)$idapp => 'bouigue'
);
$redis->mset($arraya);
$redis->lPush('list'.$redis->get('operateur'.$idapp),$idapp);
$redis->lPush('listaeffectuer',$idapp);


$idapp = 8;
$arraya = array(
    'idapp'.(string)$idapp => (string)$idapp,
    'heure'.(string)$idapp => '10h30',
    'num'.(string)$idapp => '0654878946',
    'status'.(string)$idapp => 'aeffctuer',
    'operateur'.(string)$idapp => 'free'
);
$redis->mset($arraya);
$redis->lPush('list'.$redis->get('operateur'.$idapp),$idapp);
$redis->lPush('listaeffectuer',$idapp);


$idapp = 9;
$arraya = array(
    'idapp'.(string)$idapp => (string)$idapp,
    'heure'.(string)$idapp => '8h32',
    'num'.(string)$idapp => '0611111111',
    'status'.(string)$idapp => 'aeffctuer',
    'operateur'.(string)$idapp => 'orange'
);
$redis->mset($arraya);
$redis->lPush('list'.$redis->get('operateur'.$idapp),$idapp);
$redis->lPush('listaeffectuer',$idapp);



$idapp = 10;
$arraya = array(
    'idapp'.(string)$idapp => (string)$idapp,
    'heure'.(string)$idapp => '10h31',
    'num'.(string)$idapp => '0654842222',
    'status'.(string)$idapp => 'aeffctuer',
    'operateur'.(string)$idapp => 'sfr'
);
$redis->mset($arraya);
$redis->lPush('list'.$redis->get('operateur'.$idapp),$idapp);
$redis->lPush('listaeffectuer',$idapp);

// à présent nous allons passer 3 appels à "en cours"
$idtofind = 4;
$redis->lRem('listaeffectuer',$idtofind,0);
$redis->set('status'.$idtofind,'encours');
$redis->lPush('listencours', $idtofind);

$idtofind = 3;
$redis->lRem('listaeffectuer',$idtofind,0);
$redis->set('status'.$idtofind,'encours');
$redis->lPush('listencours', $idtofind);

$idtofind = 7;
$redis->lRem('listaeffectuer',$idtofind,0);
$redis->set('status'.$idtofind,'encours');
$redis->lPush('listencours', $idtofind);

$idtofind = 4;
$redis->lRem('listaeffectuer',$idtofind,0);
$redis->set('status'.$idtofind,'encours');
$redis->lPush('listencours', $idtofind);

// On assigne un appel dans la catégorie "non pris en compte"
$idtofind = 5;
$redis->lRem('listaeffectuer',$idtofind,0);
$redis->set('status'.$idtofind,'nonpris');
$redis->lPush('listnonpris', $idtofind);

// On termine l'appel 4
$idtofind = 4;
$redis->lRem('listencours',$idtofind,0);
$redis->set('status'.$idtofind,'termine');
$redis->lPush('listtermine', $idtofind);

// Ainsi on obtient 4 listes avec les appels suivant leur status
?>
