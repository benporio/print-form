<div class="header-div container">
    <div class="padder">
        <div class="content">
            <div style="text-align: center; padding-top: 15px; padding-bottom: 10px; font-size: 2.8em; font-weight: bold; color: <?= $formModel->colors['color1'] ?>;">
                <span>
                    <?= $formModel->header->title ?>
                </span>
            </div>
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td rowspan="2" style="vertical-align: top; width: 50%; padding-bottom: 10px;">
                                <div>
                                    <table style="font-size: 1.4em;">
                                        <tbody>
                                            <tr>
                                                <td style="width: 120px;">
                                                    <div>
                                                        <span>Sold to:</span>
                                                    </div>
                                                </td>
                                                <td style="border-bottom: 1px solid black;"><?= $formModel->header->customerName ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;">
                                                    <div>
                                                        <span>TIN:</span>
                                                    </div>
                                                </td>
                                                <td style="border-bottom: 1px solid black;"><?= $formModel->header->customerTin ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;">
                                                    <div>
                                                        <span>Address:</span>
                                                    </div>
                                                </td>
                                                <td style="border-bottom: 1px solid black;"><?= $formModel->header->customerAddress ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px; height: 25px;">
                                                    <div>
                                                        <span></span>
                                                    </div>
                                                </td>
                                                <td style="border-bottom: 1px solid black;"></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px; height: 25px;">
                                                    <div>
                                                        <span></span>
                                                    </div>
                                                </td>
                                                <td style="border-bottom: 1px solid black;"></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;">
                                                    <div>
                                                        <span>Business Style:</span>
                                                    </div>
                                                </td>
                                                <td style="border-bottom: 1px solid black;"><?= $formModel->header->customerBusinessStyle ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                            <td style="width: 5%;">

                            </td>
                            <td style="text-align: right; width: 50%; vertical-align: top;">
                                <div>
                                    <table style="font-size: 1.4em; text-align: left;">
                                        <tbody>
                                            <tr>
                                                <td style="width: 150px;">
                                                    <div>
                                                        <span>Date:</span>
                                                    </div>
                                                </td>
                                                <td style="border-bottom: 1px solid black;"><?= $formModel->header->documentDate ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;">
                                                    <div>
                                                        <span>Terms:</span>
                                                    </div>
                                                </td>
                                                <td style="border-bottom: 1px solid black;"><?= $formModel->header->terms ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;">
                                                    <div>
                                                        <span>OSCA/PWD ID No.:</span>
                                                    </div>
                                                </td>
                                                <td style="border-bottom: 1px solid black;"><?= $formModel->header->oscaPwdIdNo ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;">
                                                    <div>
                                                        <span>SC/PWD Signature:</span>
                                                    </div>
                                                </td>
                                                <td style="border-bottom: 1px solid black;"><?= $formModel->header->scPwdSignature ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="vertical-align: bottom; text-align: right; padding-right: 30px;">
                                <div style="font-size: 2em; font-weight: bold; color: <?= $formModel->colors['color1'] ?>;">
                                    <span>NO. <?= $formModel->header->documentNumber ?></span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>