<?php
$pageSubTitle = 'Courses';
include('template.php');
?>

        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="flex flex-col">
                    <?php foreach ($courses as $course) : ?>
                        <div>
                            <figure class="h-auto md:h-72 flex flex-col md:flex-row
                                                            rounded-none sm:rounded-xl
                                                            bg-white dark:bg-gray-900 
                                                            my-4 p-8 md:p-0">
                                <a class="h-48 w-48 md:h-72 md:w-72 md:min-w-72  mx-auto" href="./curricula.php?course=<?= $course->abbreviation ?>">
                                    <img class="h-full aspect-auto mx-auto rounded-full
                                                                md:rounded-l-xl md:rounded-r-none" src="img/cursos/<?= $course->abbreviation ?>.png">
                                </a>
                                <div class="h-auto p-6 text-center md:text-left space-y-1 flex flex-col">
                                    <a class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-5"
                                        href="./curricula.php?course=<?= $course->abbreviation ?>">
                                        <?= courseFullName($course->name, $course->type) ?>
                                    </a>
                                    <figcaption class="font-medium">
                                        <div class="flex justify-center md:justify-start font-base
                                                                    text-base space-x-6 text-gray-700 dark:text-gray-300">
                                            <div><?= $course->semesters ?> semesters</div>
                                            <div><?= $course->ECTS ?> ECTS</div>
                                            <div><?= $course->places ?> places</div>
                                        </div>
                                        <address class="font-light text-gray-700 dark:text-gray-300">
                                            <a href="mailto:coord.ei.estg@ipleiria.pt">
                                                <?= $course->contact ?></a>.
                                        </address>
                                    </figcaption>
                                    <p class="pt-4 font-light text-gray-700 dark:text-gray-300 overflow-y-auto">
                                        <?= $course->objectives ?>
                                    </p>
                                </div>
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>