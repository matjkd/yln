
<table id="newsletter_table" style="width: 100%;">
    <thead>
        <tr>
            <th>Date</th>
            <th>Title</th>
            <th>Jurisdiction</th>



        </tr>

    </thead>
    <tbody>
        <?php
      
        foreach ($newsletters as $row):

            $link = str_replace(" ", "+", $row->newsletter_filename);
            $datestring1 = "%F %Y ";
            $datestring2 = " %d/%m/%Y ";
            $time = $row->newsletter_date;
            $time2 = $row->date_added;
            $newsletter_date = mdate($datestring1, $time);
            $date_added = mdate($datestring2, $time2);
            ?>

            <tr>

                <td><span style="display: none;"><?= $time ?> </span> <?= $newsletter_date ?>
                </td>
                <td><a target="_blank" 
                       href="https://s3-eu-west-1.amazonaws.com/laworldnewsletters/<?= $link ?>"><?= $row->newsletter_title ?> (download)
                    </a><br /> <em>Written by <?= $row->company_name ?>
                    </em>
                </td>

                <td><?= $row->city ?>, <?= $row->country ?></td>




            </tr>




        <?php endforeach; ?>
    </tbody>
</table>
<br/>
