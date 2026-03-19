<?php
require_once('functions.php');
require_once('my_functions.php');

$selectedCourse = $_GET['course'] ?? 'EI';
$courses = loadCourses();
$course = filterCourses($courses, $selectedCourse)[0] ?? null;
$disciplines = loadDisciplinesOfCourse($selectedCourse);

$pageSubTitle = 'Curriculum of ' . courseFullName($course->name, $course->type);
include('template.php');
?>

<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="bg-white dark:bg-gray-900 p-6 rounded-xl font-base text-base text-gray-700 dark:text-gray-300">
                <table class="table-auto border-collapse border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border-2 border-gray-400 dark:border-gray-500 py-1 px-3 bg-gray-100 dark:bg-gray-800">Year</th>
                            <th class="border-2 border-gray-400 dark:border-gray-500 py-1 px-3 bg-gray-100 dark:bg-gray-800">1st semester</th>
                            <th class="border-2 border-gray-400 dark:border-gray-500 py-1 px-3 bg-gray-100 dark:bg-gray-800">2nd semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Considering maximum number of years is 5
                        for ($year = 1; $year <= 5; $year++) {
                            $annuals = filterDisciplines($disciplines, $year, 0);
                            $semesters[1] = filterDisciplines($disciplines, $year, 1);
                            $semesters[2] = filterDisciplines($disciplines, $year, 2);
                            // Add the annual disciplines to the beggining of both semesters
                            if (count($annuals) > 0) {
                                $semesters[1] = array_merge($annuals, $semesters[1]);
                                $semesters[2] = array_merge($annuals, $semesters[2]);
                            }
                            $totals[1] = count($semesters[1]);
                            $totals[2] = count($semesters[2]);
                            $biggestTotal = max($totals);

                            for ($i = 0; $i < $biggestTotal; $i++) {
                                echo "<tr>";
                                // First Line
                                if ($i == 0) {
                                    echo "<th class='py-1 px-3 border-b-2 border-x-2 border-b-gray-400 dark:border-b-gray-500 border-x-gray-400 dark:border-x-gray-500 bg-gray-100 dark:bg-gray-800' rowspan='{$biggestTotal}'>{$year}</th>";
                                }
                                for ($n = 1; $n <= 2; $n++) {
                                    $discName = $semesters[$n][$i]->name ?? '';
                                    $isDisciplineAnnual = ($semesters[$n][$i]->semester ?? -1) == 0;
                                    // If discipline is annual and we're handling the 2nd semester
                                    // then we do not create a <td> element because the 1st semester <td> 
                                    // includes a colspan = 2 (occupies 2 cells)
                                    if ($isDisciplineAnnual == 2 && $n == 2) {
                                        continue;
                                    }
                                    $colspan = $isDisciplineAnnual ? ' colspan=2' : '';
                                    $styleForAnnual = $isDisciplineAnnual ? 'text-center' : '';
                                    $rowspan = '';
                                    if ($discName == '') {
                                        // First empty line for this semester
                                        if ($i == $totals[$n]) {
                                            // Merge vertically when necessary 
                                            if ($totals[$n] + 1 < $biggestTotal) {
                                                $rowspan = " rowspan='" . ($biggestTotal - $totals[$n]) . "'";
                                            }
                                        } else {
                                            // If is not the first line, then ignore it (does not write <td>)
                                            continue;
                                        }
                                    }
                                    if ($i == ($biggestTotal - 1) || ($rowspan != '')) {
                                        // Last line of the year
                                        echo "<td class='border border-b-2 border-b-gray-400 dark:border-b-gray-500 py-1 px-3 border-e-2 border-e-gray-400 dark:border-e-gray-500 {$styleForAnnual}'{$rowspan}{$colspan}>{$discName}</td>";
                                    } else {
                                        // Other lines
                                        echo "<td class='border border-b-gray-300 dark:border-b-gray-700 py-1 px-3 border-e-2 border-e-gray-400 dark:border-e-gray-500 {$styleForAnnual}'{$rowspan}{$colspan}>{$discName}</td>";
                                    }
                                }
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
</div>
</body>

</html>