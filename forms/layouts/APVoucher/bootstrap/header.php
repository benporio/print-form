<div class="header-div container">
    <div class="padder">
        <div class="content">
            <div style="text-align: center;"><span><strong><?= $formModel->header->companyName ?></strong></span></div>
            <div style="text-align: center;"><span><?= $formModel->header->companyAddress ?></span></div>
            <div style="text-align: center;"><span>VAT REG. TIN : <?= $formModel->header->tinNo ?></span></div>
            <div style="text-align: center; font-size: 3em; font-weight: bold; color: <?= $formModel->colors['color1'] ?>;"><span><?= $formModel->header->title ?></span></div>
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td style="vertical-align: top;">
                                <div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="label">
                                                    <span>
                                                        Billed to:
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>
                                                        Cv Trucking Services
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label">
                                                    <span>
                                                        TIN
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>
                                                        207-413-922-003
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label">
                                                    <span>
                                                    ADDRESS
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>
                                                        
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                            <td style="width: 30%;">

                            </td>
                            <td style="text-align: right;">
                                <div>
                                    <table style="text-align: left;">
                                        <tbody>
                                            <tr>
                                                <td class="label" style="padding-left: 20px; padding-bottom: 20px;">
                                                    <span>
                                                        Date
                                                    </span>
                                                </td>
                                                <td style="padding-left: 20px; padding-bottom: 20px;">
                                                    <div>
                                                        <span>
                                                            <?= $formModel->header->documentDate ?>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div style="font-size: 3em; font-weight: bold; color: <?= $formModel->colors['color1'] ?>;">
                                                        <span>NO.&nbsp;</span><span><?= $formModel->header->documentNumber ?></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>