<?php

namespace Xefi\Faker\EnPk\Extensions;

use Xefi\Faker\Extensions\PersonExtension as BasePersonExtension;

class PersonExtension extends BasePersonExtension
{
    public function getLocale(): string|null
    {
        return 'en_PK';
    }

    protected $firstNameMale = [
        'Ahmed', 'Ali', 'Abbas', 'Akbar', 'Amir', 'Asad', 'Bilal', 'Faisal', 'Farhan', 'Hamza',
        'Hassan', 'Imran', 'Junaid', 'Kamran', 'Khalid', 'Mohammad', 'Nadeem', 'Omar', 'Rafiq', 'Rashid',
        'Sajid', 'Salman', 'Shahid', 'Tariq', 'Umar', 'Usman', 'Waqas', 'Yasir', 'Yusuf', 'Zahid',
        'Abdul', 'Adnan', 'Aftab', 'Akram', 'Arif', 'Asif', 'Aslam', 'Ateeq', 'Ayaz', 'Azhar',
    ];

    protected $firstNameFemale = [
        'Aisha', 'Amina', 'Ayesha', 'Farah', 'Fatima', 'Hina', 'Hira', 'Iman', 'Javeria', 'Khadija',
        'Laila', 'Maham', 'Mariam', 'Mehak', 'Nadia', 'Naila', 'Rabia', 'Rania', 'Sana', 'Sara',
        'Shaheen', 'Shazia', 'Sidra', 'Sofia', 'Sumaiya', 'Tahira', 'Uzma', 'Yasmin', 'Zainab', 'Zara',
        'Aalia', 'Ambreen', 'Anam', 'Anum', 'Arooba', 'Asma', 'Bushra', 'Erum', 'Farzana', 'Ghazala',
    ];

    protected $lastName = [
        'Khan', 'Ali', 'Ahmed', 'Hussain', 'Malik', 'Raza', 'Siddiqui', 'Baig', 'Chaudhry', 'Shah',
        'Awan', 'Butt', 'Gill', 'Javed', 'Khalid', 'Mirza', 'Nawaz', 'Qureshi', 'Rashid', 'Saeed',
        'Shaikh', 'Tariq', 'Yousaf', 'Zaman', 'Abbasi', 'Akhtar', 'Ansari', 'Bashir', 'Durrani', 'Farooq',
        'Gul', 'Haider', 'Iqbal', 'Jamal', 'Kazmi', 'Lodhi', 'Mughal', 'Noor', 'Pasha', 'Rahman',
    ];

    protected $titleMale = ['Mr.', 'Dr.', 'Prof.', 'Mian', 'Chaudhry', 'Sardar'];

    protected $titleFemale = ['Ms.', 'Mrs.', 'Miss', 'Dr.', 'Prof.', 'Begum'];
}