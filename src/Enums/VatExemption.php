<?php

namespace Firebed\AadeMyData\Enums;

enum VatExemption: int
{
    /**
     *  Χωρίς ΦΠΑ – άρθρο 2 και 3 του Κώδικα ΦΠΑ
     */
    case TYPE_1 = 1;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 5 του Κώδικα ΦΠΑ
     */
    case TYPE_2 = 2;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 13 του Κώδικα ΦΠΑ
     */
    case TYPE_3 = 3;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 14 του Κώδικα ΦΠΑ
     */
    case TYPE_4 = 4;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 16 του Κώδικα ΦΠΑ
     */
    case TYPE_5 = 5;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 19 του Κώδικα ΦΠΑ
     */
    case TYPE_6 = 6;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 22 του Κώδικα ΦΠΑ
     */
    case TYPE_7 = 7;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 24 του Κώδικα ΦΠΑ
     */
    case TYPE_8 = 8;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 25 του Κώδικα ΦΠΑ
     */
    case TYPE_9 = 9;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 26 του Κώδικα ΦΠΑ
     */
    case TYPE_10 = 10;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 27 του Κώδικα ΦΠΑ
     */
    case TYPE_11 = 11;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 27 - Πλοία Ανοικτής Θαλάσσης του Κώδικα ΦΠΑ
     */
    case TYPE_12 = 12;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 27.1.γ - Πλοία Ανοικτής Θαλάσσης του Κώδικα ΦΠΑ
     */
    case TYPE_13 = 13;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 28 του Κώδικα ΦΠΑ
     */
    case TYPE_14 = 14;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 39 του Κώδικα ΦΠΑ
     */
    case TYPE_15 = 15;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 39α του Κώδικα ΦΠΑ
     */
    case TYPE_16 = 16;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 40 του Κώδικα ΦΠΑ
     */
    case TYPE_17 = 17;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 41 του Κώδικα ΦΠΑ
     */
    case TYPE_18 = 18;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 47 του Κώδικα ΦΠΑ
     */
    case TYPE_19 = 19;


    /**
     *  ΦΠΑ εμπεριεχόμενος - άρθρο 43 του Κώδικα ΦΠΑ
     */
    case TYPE_20 = 20;


    /**
     *  ΦΠΑ εμπεριεχόμενος - άρθρο 44 του Κώδικα ΦΠΑ
     */
    case TYPE_21 = 21;


    /**
     *  ΦΠΑ εμπεριεχόμενος - άρθρο 45 του Κώδικα ΦΠΑ
     */
    case TYPE_22 = 22;


    /**
     *  ΦΠΑ εμπεριεχόμενος - άρθρο 46 του Κώδικα ΦΠΑ
     */
    case TYPE_23 = 23;


    /**
     *  Χωρίς ΦΠΑ - άρθρο 6 του Κώδικα ΦΠΑ
     */
    case TYPE_24 = 24;


    /**
     *  Χωρίς ΦΠΑ - ΠΟΛ.1029/1995
     */
    case TYPE_25 = 25;


    /**
     *  Χωρίς ΦΠΑ - ΠΟΛ.1167/2015
     */
    case TYPE_26 = 26;


    /**
     *  Λοιπές Εξαιρέσεις ΦΠΑ
     */
    case TYPE_27 = 27;


    /**
     * Χωρίς ΦΠΑ – άρθρο 24 περ. β' παρ.1 του Κώδικα ΦΠΑ, (Tax Free)
     */
    case TYPE_28 = 28;


    /**
     * Χωρίς ΦΠΑ – άρθρο 47β, του Κώδικα ΦΠΑ (OSS μη ενωσιακό καθεστώς)
     */
    case TYPE_29 = 29;


    /**
     * Χωρίς ΦΠΑ – άρθρο 47γ, του Κώδικα ΦΠΑ (OSS ενωσιακό καθεστώς)
     */
    case TYPE_30 = 30;


    /**
     * Χωρίς ΦΠΑ – άρθρο 47δ του Κώδικα ΦΠΑ (IOSS)
     */
    case TYPE_31 = 31;
}