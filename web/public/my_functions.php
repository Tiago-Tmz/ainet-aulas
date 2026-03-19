<?php

function courseFullName(string $name, string $type)
{
    return match(strtolower($type)) {
        'master' => "Master's in " . $name,
        'tesp' => 'TeSP - ' . $name,
        default => $name,
    };
}

function filterDisciplines(array $disciplines, int $year, int $semester): array
{
    return array_values(array_filter($disciplines, function ($discipline) use ($year, $semester) {
        return $discipline->year == $year && $discipline->semester == $semester;
    }));
}