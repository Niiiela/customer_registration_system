<?php

namespace App\Enums;

enum CustomerEnum: string
{
    case SSP = 'SSP';
    case DETRAN = 'DETRAN';
    case PF = 'PF';
    case PM = 'PM';
    case PC = 'PC';
    case BM = 'BM';
    case IFP = 'IFP';
    case IPF = 'IPF';
    case MAE = 'MAE';
    case MEX = 'MEX';
    case MMI = 'MMI';
    case MTE = 'MTE';
    case CRT = 'CRT';
    case CRM = 'CRM';
    case CRF = 'CRF';
    case CREA = 'CREA';
    case CRO = 'CRO';
    case CRA = 'CRA';
    case CRC = 'CRC';
    case OAB = 'OAB';
    case ME = 'ME';
    case DGPC = 'DGPC';
    case IGP = 'IGP';
    case SEJUSP = 'SEJUSP';
    case SJS = 'SJS';
    case SJTS = 'SJTS';
    case CGP = 'CGP';

    case AC = 'AC';
    case AL = 'AL';
    case AP = 'AP';
    case AM = 'AM';
    case BA = 'BA';
    case CE = 'CE';
    case DF = 'DF';
    case ES = 'ES';
    case GO = 'GO';
    case MA = 'MA';
    case MT = 'MT';
    case MS = 'MS';
    case MG = 'MG';
    case PA = 'PA';
    case PB = 'PB';
    case PR = 'PR';
    case PE = 'PE';
    case PI = 'PI';
    case RJ = 'RJ';
    case RN = 'RN';
    case RS = 'RS';
    case RO = 'RO';
    case RR = 'RR';
    case SC = 'SC';
    case SP = 'SP';
    case SE = 'SE';
    case TO = 'TO';

    case M = 'Masculino';
    case F = 'Feminino';
    case O = 'Outro';

    case SINGLE = 'Solteiro(a)';
    case MARRIED = 'Casado(a)';
    case DIVORCED = 'Divorciado(a)';
    case WIDOWER = 'Viúvo(a)';
    case STABLE_UNION = 'União Estável';
    case OTHERS = 'Outros';

    case ACTIVE = 'Ativo';
    case INACTIVE = 'Inativo';

    public static function issuing_authority(): array
    {
        return [
            self::SSP->value => 'SSP',
            self::DETRAN->value => 'DETRAN',
            self::PF->value => 'PF',
            self::PM->value => 'PM',
            self::PC->value => 'PC',
            self::BM->value => 'BM',
            self::IFP->value => 'IFP',
            self::IPF->value => 'IPF',
            self::MAE->value => 'MAE',
            self::MEX->value => 'MEX',
            self::MMI->value => 'MMI',
            self::MTE->value => 'MTE',
            self::CRT->value => 'CRT',
            self::CRM->value => 'CRM',
            self::CRF->value => 'CRF',
            self::CREA->value => 'CREA',
            self::CRO->value => 'CRO',
            self::CRA->value => 'CRA',
            self::CRC->value => 'CRC',
            self::OAB->value => 'OAB',
            self::ME->value => 'ME',
            self::DGPC->value => 'DGPC',
            self::IGP->value => 'IGP',
            self::SEJUSP->value => 'SEJUSP',
            self::SJS->value => 'SJS',
            self::SJTS->value => 'SJTS',
            self::CGP->value => 'CGP',
        ];
    }

    public static function state(): array
    {
        return [
            self::AC->value => 'AC',
            self::AL->value => 'AL',
            self::AP->value => 'AP',
            self::AM->value => 'AM',
            self::BA->value => 'BA',
            self::CE->value => 'CE',
            self::DF->value => 'DF',
            self::ES->value => 'ES',
            self::GO->value => 'GO',
            self::MA->value => 'MA',
            self::MT->value => 'MT',
            self::MS->value => 'MS',
            self::MG->value => 'MG',
            self::PA->value => 'PA',
            self::PB->value => 'PB',
            self::PR->value => 'PR',
            self::PE->value => 'PE',
            self::PI->value => 'PI',
            self::RJ->value => 'RJ',
            self::RN->value => 'RN',
            self::RS->value => 'RS',
            self::RO->value => 'RO',
            self::RR->value => 'RR',
            self::SC->value => 'SC',
            self::SP->value => 'SP',
            self::SE->value => 'SE',
            self::TO->value => 'TO',
        ];
    }

    public static function sex(): array
    {
        return [
            self::M->value => 'Masculino',
            self::F->value => 'Feminino',
            self::O->value => 'Outro',
        ];
    }

    public static function maritalStatus(): array
    {
        return [
            self::SINGLE->value => 'Solteiro(a)',
            self::MARRIED->value => 'Casado(a)',
            self::DIVORCED->value => 'Divorciado(a)',
            self::WIDOWER->value => 'Viúvo(a)',
            self::STABLE_UNION->value => 'União Estável',
            self::OTHERS->value => 'Outros',
        ];
    }

    public static function status(): array
    {
        return [
            self::ACTIVE->value => 'Ativo',
            self::INACTIVE->value => 'Inativo',
        ];
    }

    public static function casesArray(): array
    {
        return array_column(self::cases(), 'value', 'name');
    }
}
