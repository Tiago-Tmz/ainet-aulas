<?php

const data_path = '../json_data';

function convertJsonFileToArray(string $filename): array
{
    $fileName = data_path . '/' . $filename;
    if (file_exists($fileName)) {
        $content = file_get_contents($fileName);
        return json_decode($content);
    }
    return [];
}

function loadCourses(): array
{
    return convertJsonFileToArray('courses.json');
}

function filterCourses(array $courses, string $courseAbr): array
{
    return array_values(array_filter($courses, function ($value) use ($courseAbr) {
        return strtolower($value->abbreviation) == strtolower($courseAbr);
    }));
}

function loadDisciplinesOfCourse(string $courseAbr): array
{
    return convertJsonFileToArray('disciplines-by-course/' . strtolower($courseAbr) . '.json');
}