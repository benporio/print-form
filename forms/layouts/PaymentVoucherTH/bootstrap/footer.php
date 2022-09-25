<div class="footer-div container">
    <div class="padder" style="padding-top: 40px;">
        <div class="content">
            <div style="padding-bottom: 5px;">
                <span>Payment Details:</span>
            </div>
            <div style="padding-left: 70px;">
                <table class="details">
                    <tr>
                        <td style="width: 120px;">Payment Method:</td>
                        <td style="width: 250px;"><?= $formModel->footer->paymentMethod ?></td>
                        <td style="width: 90px;">Bank:</td>
                        <td><?= $formModel->footer->bank ?></td>
                    </tr>
                    <tr>
                        <td>Payment Date:</td>
                        <td><?= $formModel->footer->paymentDate ?></td>
                        <td>Bank No.:</td>
                        <td><?= $formModel->footer->bankNo ?></td>
                    </tr>
                    <tr>
                        <td>Amount Paid</td>
                        <td><?= $formModel->footer->amountPaid ?></td>
                        <td>Bank Name:</td>
                        <td><?= $formModel->footer->bankName ?></td>
                    </tr>
                </table>
            </div>
            <div style="padding-top: 100px;">
                <table class="signature">
                    <tr>
                        <td><span><?= $formModel->footer->signatories[0]->name ?><hr class="line">Prepared by:</span></td>
                        <td><span><?= $formModel->footer->signatories[1]->name ?><hr class="line">Checked by:</span></td>
                        <td><span><?= $formModel->footer->signatories[2]->name ?><hr class="line">Approved by:</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
