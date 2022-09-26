<div class="footer-div container">
    <div class="padder">
        <div class="content">
            <div style="margin-top: 50px;">
                <table>
                    <tbody>
                        <tr>
                            <td rowspan="2" style="text-align: left; vertical-align: bottom;">
                                <div>
                                    <span>BIR Authority to Print No.</span>&nbsp;<span><?= $formModel->footer->printNo ?></span><br>
                                    <span>Date Issued:</span>&nbsp;<span><?= $formModel->footer->dateIssued ?></span><br>
                                    <span><?= $formModel->footer->printingCompany ?></span><br>
                                    <span><?= $formModel->footer->printingCompanyAddress ?></span><br>
                                    <span>TIN:</span>&nbsp;<span><?= $formModel->footer->printingCompanyTin ?></span>
                                </div>
                            </td>
                            <td rowspan="2" style="width: 300px;"></td>
                            <td style="vertical-align: top;">
                                <div>
                                    <span><?= $formModel->footer->signatories[0]->name ?>
                                        <hr class="line">
                                        Authorized Representative
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 50px; padding-top: 10px;">
                                <div>
                                    <span>Printer's Accreditation No.</span><span><?= $formModel->footer->printerAccNo ?></span><br>
                                    <span>Date Issued:</span><span><?= $formModel->footer->dateIssued2 ?></span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
