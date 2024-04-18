<?php 


function filtrerPresences($presences)
{
    $filteredData = $presences;
    if (isset($_POST['refresh'])) {
        $statusFilter = $_POST['status'];
        $referentielFilter = $_POST['referenciel'];
        $dateFilter = $_POST['date']; // $_POST['date] = '', '20-12-2024'

        if ($statusFilter === 'present' || $statusFilter === 'absent') {
            $filteredData = array_filter($filteredData, function ($row) use ($statusFilter) {
                return $row['status'] === $statusFilter;
            });
        }

        if ($referentielFilter !== '') {
            $filteredData = array_filter($filteredData, function ($row) use ($referentielFilter) {
                return $row['referenciel'] === $referentielFilter;
            });
        }


        if ($dateFilter !== '') {
            // formater la date d'abord avant de le filtrer
            $formattedDateFilter = date('Y-m-d', strtotime($dateFilter));
            // on filtre la date formater stocker dans la variable $formattedDateFilter
            $filteredData = array_filter($filteredData, function ($row) use ($formattedDateFilter) {
                $rowDate = DateTime::createFromFormat('m-d-Y', $row['date']);
                if (!$rowDate) {
                    $rowDate = new DateTime($row['date']);
                }
                return $rowDate->format('Y-m-d') === $formattedDateFilter;
            });
        }
    }
    return $filteredData;
}