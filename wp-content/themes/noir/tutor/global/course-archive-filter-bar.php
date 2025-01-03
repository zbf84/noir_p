<?php
/**
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

	$sort_by = '';
	isset( $_GET['tutor_course_filter'] ) ? $sort_by  = tutor_sanitize_data( $_GET['tutor_course_filter'] ) : 0;
	isset( $_POST['tutor_course_filter'] ) ? $sort_by = tutor_sanitize_data( $_POST['tutor_course_filter'] ) : 0;
?>


<div class="tutor-course-filter-wrap">
	<div class="tutor-course-archive-results-wrap">
		<?php
            global $wp_query;
            $courseCount = $wp_query->found_posts;
            $count_text = $courseCount>1 ? __("%s Courses", "noir") : __("%s Course", "noir");
            echo sprintf($count_text, "<strong>{$courseCount}</strong>");
		?>
	</div>

    <div class="tutor-course-archive-filters-wrap">
        <form class="tutor-course-filter-form" method="get">
            <select class="tutor-form-select" name="tutor_course_filter">
                <option value="newest_first" <?php selected("newest_first", $sort_by); ?> ><?php esc_html_e("Release Date (newest first)", "noir");
					?></option>
                <option value="oldest_first" <?php selected("oldest_first", $sort_by); ?>><?php esc_html_e("Release Date (oldest first)", "noir"); ?></option>
                <option value="course_title_az" <?php selected("course_title_az", $sort_by); ?>><?php esc_html_e("Course Title (a-z)", "noir"); ?></option>
                <option value="course_title_za" <?php selected("course_title_za", $sort_by); ?>><?php esc_html_e("Course Title (z-a)", "noir"); ?></option>
            </select>
        </form>
    </div>
</div>
