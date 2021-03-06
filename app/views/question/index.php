
<?php if ($data['question']): ?>
   <div class="inner-container">
        <div class="question-header">
            <h1><?= $data['question']->topic; ?></h1>
        </div>

        <div class="question-item">
            <div class="row">

                <div class="question-status col-2">
                    <div class="vote">

                        <div class="vote-up">
                            <a class="vote-link vote-question" data-vote="up" data-id-question="<?= $data['question']->id_question; ?>" href="">▲</a>
                        </div>

                        <div class="vote-counts">
                            <span id="question-vote-<?= $data['question']->id_question; ?>"><?= $data['question']->votecounts; ?></span>
                        </div>

                        <div class="vote-down">
                            <a class="vote-link vote-question" data-vote="down" data-id-question="<?= $data['question']->id_question; ?>" href="">▼</a>
                        </div>

                    </div>
                </div> <!-- .question-status -->

                <div class="question-content col-10">
                    <p><?= $data['question']->content; ?></p>
                </div>

                <div class="question-meta">
                    <span>
                        Asked by
                        <span class="meta-name"><?= $data['question']->email; ?></span> |
                        <a href="<?= ROOT_URL; ?>/question/edit/<?= $data['question']->id_question; ?>" class="question-edit">Edit</a> |
                        <form id="deleteForm_question_<?= $data['question']->id_question ?>" class="delete-form" action="<?= ROOT_URL; ?>/question/delete" method="POST">
                            <input type="hidden" name="id_question" value="<?= $data['question']->id_question; ?>">
                            <input type="submit" data-form-id="deleteForm_question_<?= $data['question']->id_question; ?>" class="form-delete" value="Delete">
                        </form>
                    </span>
                </div>

            </div> <!-- .row -->
        </div> <!-- .question-item -->
    </div> <!-- .inner-container -->
<?php endif; ?>

    
    <div class="row">
        <div class="answer-header col-10 col-push-1">
            <h2><?= count($data['answers']) > 0 ? count($data['answers']) : 0; ?> Answers</h2>
        </div>
    </div>
    
<?php if ($data['answers']): ?>
    <div class="inner-container">
        
        <?php foreach($data['answers'] as $answer): ?>
            <div class="answer">
                <div class="row">
                    
                    <div class="answer-status col-2">
                        <div class="vote">
                            <div class="vote-up">
                                <a class="vote-link vote-answer" data-vote="up" data-id-answer="<?= $answer->id_answer; ?>" href="">▲</a>
                            </div>

                            <div class="vote-counts">
                                <span id="answer-vote-<?= $answer->id_answer; ?>"><?= $answer->votecounts; ?></span>
                            </div>

                            <div class="vote-down">
                                <a class="vote-link vote-answer" data-vote="down" data-id-answer="<?= $answer->id_answer; ?>" href="">▼</a>
                            </div>
                        </div>
                    </div> <!-- .answer-status -->

                    <div class="answer-content col-10">
                        <p>
                            <?= $answer->content; ?>
                        </p>
                    </div>

                    <div class="answer-meta">
                        <span>
                            Answered by
                            <span class="meta-name"><?= $answer->email; ?></span> |
                            <a href="<?= ROOT_URL . '/answer/edit/' . $answer->id_answer; ?>" class="question-edit">Edit</a> |
                            <form id="deleteForm_answer_<?= $answer->id_answer ?>" class="delete-form" action="<?= ROOT_URL; ?>/answer/delete" method="POST">
                                <input type="hidden" name="id_answer" value="<?= $answer->id_answer; ?>">
                                <input type="submit" class="form-delete" data-form-id="deleteForm_answer_<?= $answer->id_answer; ?>" value="Delete">
                            </form>
                        </span>
                    </div>

                </div> <!-- .row -->
            </div> <!-- .answes -->
        <?php endforeach; ?>

    </div> <!-- .inner-container -->
<?php endif; ?>

<div class="inner-container">
    <div class="row">
        <div class="answer-form col-10 col-push-2">
            
            <h3 class="answer-form-header">Your Answer</h3>

            <form id="answerForm" action="<?= ROOT_URL; ?>/answer/add" method="POST">
                <input type="hidden" name="id_question" value="<?= $data['question']->id_question; ?>">
                <div class="form-field">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" placeholder="Name">
                </div>

                <div class="form-field">
                    <label for="email">Email</label>
                    <input id="email" type="text" name="email" placeholder="Email">
                </div>

                <div class="form-field">
                    <label for="content">Answer</label>
                    <textarea id="content" name="content" placeholder="Your answer goes here"></textarea>
                </div>

                <input type="submit" id="submitAnswerForm" class="btn-submit" value="Post">
            </form>

        </div> <!-- .answer-form -->
    </div> <!-- .row -->
</div> <!-- .inner-container -->


