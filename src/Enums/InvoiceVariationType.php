<?php

namespace Firebed\AadeMyData\Enums;

enum InvoiceVariationType: int
{
    use HasLabels;
    
    /**
     * Διαβίβαση Παράλειψης από Λήπτη Χρησιμοποιείται αυτή η τιμή
     * για Διαβίβαση Δεδομένων από τον Λήπτη λόγω Παράλειψης Διαβίβασης του
     * Εκδότη. Επιτρεπτοί τύποι παραστατικών: 1.1, 1.6, 2.1, 2.4, 5.2, 8.1 και 8.2
     */
    case TYPE_1 = 1;


    /**
     * Διαβίβαση Παράλειψης από Εκδότη Χρησιμοποιείται αυτή η τιμή
     * για Διαβίβαση Δεδομένων από τον Εκδότη, στην περίπτωση που συμφωνεί με
     * την επισήμανση του Λήπτη περί παράλειψης διαβίβασης από μέρους του (εκδότη)
     * Επιτρεπτοί τύποι παραστατικών: 11.3, 11.4, 13.1, και 13.31
     */
    case TYPE_2 = 2;


    /**
     * Διαβίβαση Απόκλισης από Λήπτη Χρησιμοποιείται αυτή η τιμή
     * για Διαβίβαση Δεδομένων (μη αντικριζόμενα παραστατικά)
     * από τον Λήπτη λόγω Απόκλισης Διαβίβασης Δεδομένων από τον Εκδότη
     * Επιτρεπτοί τύποι παραστατικών: 11.3, 11.4, 13.1, και 13.31
     * (Ειδικά και αποκλειστικά για παραστατικά που εκδόθηκαν
     * εντός του 2021 οι επιτρεπτοί τύποι είναι οι 1.1 και 5.2)
     */
    case TYPE_3 = 3;


    /**
     * Διαβίβαση Απόκλισης από Εκδότη Χρησιμοποιείται αυτή η τιμή
     * για Διαβίβαση Δεδομένων από τον Εκδότη, στην περίπτωση που συμφωνεί με
     * την επισήμανση του Λήπτη «Απόκλιση Διαβίβασης» στον
     * αντικριζόμενο Τύπο Παραστατικού Α1 που είχε διαβιβάσει στον Λήπτη
     * Επιτρεπτοί τύποι παραστατικών: 11.3, 11.4, 13.1, και 13.31
     */
    case TYPE_4 = 4;

    public function label(): string
    {
        return match ($this) {
            self::TYPE_1 => "Διαβίβαση Παράλειψης από Λήπτη",
            self::TYPE_2 => "Διαβίβαση Παράλειψης από Εκδότη",
            self::TYPE_3 => "Διαβίβαση Απόκλισης από Λήπτη",
            self::TYPE_4 => "Διαβίβαση Απόκλισης από Εκδότη",
        };
    }
}
