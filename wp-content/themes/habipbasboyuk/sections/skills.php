<section class="skills-section">
    <p class="section-subtitle">// My Skills</p>
    <h2 class="section-title">Technologies I Work With</h2>
    <p class="section-desc">Here are the tools I use to bring ideas to life.</p>

    <div class="skills-grid">
        <?php
        $skill_categories = [
            ['title' => 'frontend/', 'skills' => ['React', 'Next.js', 'TypeScript', 'Tailwind']],
            ['title' => 'backend/', 'skills' => ['Node.js', 'PHP', 'Express', 'Python']],
            ['title' => 'database/', 'skills' => ['PostgreSQL', 'MySQL', 'MongoDB']],
            ['title' => 'design/', 'skills' => ['Figma', 'Adobe XD', 'Photoshop']]
        ];

        foreach ($skill_categories as $cat) : ?>
            <article class="skill-card">
                <div class="terminal-header">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <div class="terminal-body">
                    <p class="command">$ ls <?php echo $cat['title']; ?></p>
                    <div class="tags">
                        <?php foreach ($cat['skills'] as $skill) : ?>
                            <span class="tag"><?php echo $skill; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>