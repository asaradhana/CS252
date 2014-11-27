<!DOCTYPE html>
<html>
<body>

<?php
$str = "When a good university thinks of faculty recruitment, it thinks of research. Research brought in money from funding agencies (with huge institutional overheads, it was profitable business to do research). But more importantly, research brought in prestige. And prestige attracted better faculty, and better students. And all this attracted even more funding, including philanthropic funds. Balancing the books was important and high quality research was necessary to raise those funds.

But should universities only focus on knowledge creation, and not work on knowledge dissemination. Universities were ready with an answer. Research and teaching are two sides of the same coin. Good teaching leads to innovative ideas coming from students in the class, which can be pursued as research. And good research, of course, meant that the faculty member will have deep insights into the discipline, would be able to bring the state-of-the-art to the classrooms. Since good research implied good teaching, and research was easier to evaluate, and in any case the goal of the university is neither knowledge creation nor knowledge dissemination - it is simply prestige and prestige is to be enhanced through research - we might as well focus primarily on research credentials of the faculty applicants. The past research output was an excellent predictor of success, the success being defined as good quality and quantity of papers, patents, and other such measurable output on one hand, and the ability to not make a complete fool of oneself in the class on the other hand.

But over the last two decades, some of these equations have changed. Research problems which can be addressed by a faculty supervisor and his/her PhD student with just a paper and pen are few, if not non-existent. The research infrastructure is getting costlier and costlier. And funding has not increased at the same pace. Now, getting funds from a funding agency is much more difficult than to have a paper published in top journal/conference, with acceptance rates in single digits in case of US. At the same time, state support to education is coming down. Balancing the books is becoming extremely difficult. And guess what. Even with reduced state support, it is turning out that the tuition paying students are the real important source of funds. Universities need to attract more of these students. Teaching has suddenly become important. But prestige is still brought in by the research output.

College enrollment in the world just keeps rising, requiring more and more teachers. Eventually technology (e.g. MOOCs) will reduce the need of teachers, but that is not happening now. In the disciplines where the shortage of faculty is most acute, universities have become smarter. They no longer chant the mantra of teaching and research being the two sides of the same coin, and good research being necessary for good teaching, etc. The new mantra is that a practitioner of a discipline can also have deep insights in that discipline, they can also bring in the state-of-the-art knowledge to the class, and of course, by not needing millions of dollars in research funding, they are significantly cheaper to hire, even if salaries are comparable to that research professor. (And in many cases, the salaries too are lower.)

In certain professional fields like medicine and law, it was always known that a practitioner is actually better in a classroom than a blue-sky researcher. Business schools too have stressed on visiting faculty from industry to give that insight to students which researchers might not be able to give. But over the last several years, other disciplines too have been forced to revisit the \"research and teaching being too sides of the same coin\" mantra.

Frankly, this mantra never made sense. Active research is not the only way to learn the subject, just implementing projects or practicing the discipline can also cause learning. And on the other hand, teaching alone does not give you great ideas to pursue, all collaborations and interactions can give you those ideas. The real use of that mantra was to justify an exclusive focus on research by arguing that it would ensure good quality of teaching. But repeating that mantra had its cost. It kept a large number of potentially great teachers outside the classrooms. It was a way to improve and maintain the importance of full-time research faculty, but now the same research faculty is being overloaded with teaching duties, and suddenly they have woken up to the possibility of having some faculty members with a greater focus on teaching.

This brings us to \"Professors of Practice\" which was always there in medicine and law disciplines, and to a large extent in business schools. While the exact description differs from one university to the other, this is primarily a way to attract persons who have been working professionals in their respective disciplines, typically through a contract of 3-5 years, and renewing that contract based on performance as a teacher. However, some universities have also seen this as a way to retain their existing faculty members who after an active research life would like to increase their teaching commitment and would want them to be evaluated for their teaching contributions instead of their research contributions.

This is a win-win situation for all stakeholders. Universities get more faculty. Students get smaller classes and better teachers. Research focused faculty gets lesser teaching loads. There is greater interaction between academia and industry. There is really nothing that can go wrong with this model. The only concern is how would we recruit such people. Over the last 50 years, universities have honed the art of evaluating research output of faculty applicants. They involved outside professionals in checking the CV, write recommendation letters, be part of selection committees, etc., but in checking the teaching quality, it would be difficult to do all this. However, I do not see this as a major concern. When we ask a candidate to give a seminar, let us judge that seminar not on the basis of quality of research, but from the perspective of a teacher, and then we are only talking about a 3-5 year commitment and not a 30-40 year commitment.

As a first step, universities can strengthen their existing programs to involve professionals - visiting faculty, adjunct faculty, etc. Have more of them on campus, give them a deal which they can not refuse. And we can make a real dent in the shortage of faculty on our campuses.
";
$array = (explode("\n",$str));

foreach ($array as $value) {
    echo "<p> $value </p>";
}

?> 

</body>
</html>